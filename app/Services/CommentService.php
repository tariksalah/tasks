<?php

namespace App\Services;
use App\Models\Comment;

class CommentService
{
    public function getComments( $params = [] )
    {
        $for = isset( $params['for'] ) ? $params['for'] : null;
        $any_id = isset( $params['any_id'] ) ? $params['any_id'] : null;
        $user_id = isset( $params['user_id'] ) ? $params['user_id'] : null;
        $root = isset( $params['root'] ) ? $params['root'] : null;
        $parent_id = isset( $params['parent_id'] ) ? $params['parent_id'] : null;
        $mention_user = isset( $params['mention_user'] ) ? $params['mention_user'] : null;
        $active = isset( $params['active'] ) ? $params['active'] : null;
        $order = isset( $params['order'] ) ? $params['order'] : ['created_at','desc'];
        $pages = isset( $params['pages'] ) ? $params['pages'] : null;


        $data = Comment::with('user');

        $data->when( $for == 'item', function ($q) {
            return $q->forItem();
        });

        $data->when( $any_id, function ($q) use($any_id) {
          return $q->ofAny($any_id);
        });

        $data->when( $user_id, function ($q) use($user_id) {
          return $q->ofUser($user_id);
        });

        $data->when( $parent_id, function ($q) use($parent_id) {
          return $q->ofParent($parent_id);
        });

        $data->when( $mention_user, function ($q) {
          return $q->with('parent.user');
        });

        $data->when( $root, function ($q) {
          return $q->root();
        });

        $data->when( $active, function ($q) {
          return $q->active();
        });

        $data = $data->orderby( $order[0], $order[1] );

        if ($pages){
          return $data->paginate($pages);
        }

        return $data->get();

    }

    public function incementChildsCount($parent_id)
    {
      Comment::find($parent_id)->increment('childs_count');
    }

    public function getCommentsRootOfItem($item_id)
    {
      return Comment::with('user')->where([ 'table_name' => 'items' , 'table_id' => $item_id , 'parent_id' => 0])->orderby('created_at','desc')->paginate(5);
    }

    public function setStatus( $comment , $status )
    {
        $comment->update([ 'is_active' => $status ]);
    }



}

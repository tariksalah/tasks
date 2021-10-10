<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\User;
use App\Models\Client;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\Notification;
use App\Models\Comment;
use App\Models\Chat;
use App\Helpers\UtilHelper;
use App\Traits\Fcm;

class NotificationService
{
  use Fcm;

  public function notifyLike( $to = [] , $params = [] )
  {

      $notifiType = Notification::TYPE_LIKE;

      $user_sender_id = $params['user_sender_id'];

      // get user sender
      $user_sender = User::where('id',$user_sender_id)->select('id','name')->first();
      // get current item
      $item = Item::where('id',$params['item_id'])->select('id','client_id')->first();
      // get woner of item
      $item_client = Client::where('id',$item->client_id)->first();
      $user_receiver = $item_client->user;
      if (!$user_receiver){
        return ;
      }




      // prepare for fcm
      $msg['user_sender'] = $user_sender_id;
      $msg['user_reciever'] = $user_receiver->id;
      $msg['item'] = $item->id;
      $msg['title'] = __('messages_notify.new_like');
      $msg['body'] = __('messages_notify.likes_your_post' , [ 'user_name' => $user_sender->name ] ) ;
      $msg['type'] = $notifiType;



      // fcm
      if ( in_array( 'fcm' , $to ) ) {
          $response = $this->notifyFcm($user_receiver,$msg);
          if ( $response === false ){}
          // if ($response['result']['failure'] == 1 ){
          //   return false;
          // }
      }


      // db
      if ( in_array( 'db' , $to ) ) {
          $data['user_sender_id'] = $user_sender_id;
          $data['user_reciever_id'] = $user_receiver->id;
          $data['table_name'] = 'items';
          $data['table_id'] = $item->id;
          $data['type'] = $notifiType;
          $data['data'] = __('messages_notify.likes_your_post' , [ 'user_name' => $user_sender->name ] );
          $this->store($data);
      }


      // // web
      // if ( in_array( 'web' , $to ) ) {
      //     event(new \App\Events\MainNotification(
      //         $user_receiver->id,
      //         $user_sender->name,
      //         '1',
      //         '', // route('items.show' , ['id' => $item->id ]),
      //         __('messages_notify.likes_your_post' , [ 'user_name' => $user_sender->name ] ) . ' : ' . UtilHelper::currentDate()
      //       )
      //     );
      // }


  }

  public function notifyComment( $to = [] , $params = [] )
  {


      $notifiType = Notification::TYPE_COMMENT;

      $user_sender_id = $params['user_sender_id'];


      // get user sender
      $user_sender = User::where('id',$user_sender_id)->select('id','name')->first();
      // get current item
      $item = Item::where('id',$params['item_id'])->select('id','client_id')->first();
      // get woner of item
      $item_client = Client::where('id',$item->client_id)->first();
      $user_receiver = $item_client->user;
      if (!$user_receiver){
        return ;
      }


      $parent_Comment_user = 0;
      if ($params['parent_id'] != 0) {
        $parentComment = Comment::where('id',$params['parent_id'])->select('user_id')->first();
        if ($parentComment) {
          $parent_Comment_user = $parentComment->user_id;
        }
      }


      if ($user_sender_id == $user_receiver->id) {
        return;
      }

      if ($user_sender_id == $parent_Comment_user) {
        return;
      }


      // fcm
      if ( in_array( 'fcm' , $to ) ) {
          // send to post woner
          $msg['user_sender'] = $user_sender_id;
          $msg['user_reciever'] = $user_receiver->id;
          $msg['item'] = $item->id;
          $msg['title'] = __('messages_notify.new_comment');
          $msg['body'] = __('messages_notify.comments_your_post' , [ 'user_name' => $user_sender->name ]) ;
          $msg['type'] = $notifiType;
          $response = $this->notifyFcm($user_receiver,$msg);
          if ( $response === false ){}


          // send to parent comment woner
          if ($parent_Comment_user != 0) {
            $msg['user_sender'] = $user_sender_id;
            $msg['user_reciever'] = $parent_Comment_user; // parent comment woner
            $msg['item'] = $item->id;
            $msg['title'] = __('messages_notify.new_comment');
            $msg['body'] = __('messages_notify.comments_your_comment' , [ 'user_name' => $user_sender->name ]) ;
            $msg['type'] = $notifiType;
            $response = $this->notifyFcm($user_receiver,$msg);
            if ( $response === false ){}
          }

      }


      // db
      if ( in_array( 'db' , $to ) ) {
          $data['user_sender_id'] = $user_sender_id;
          $data['user_reciever_id'] = $user_receiver->id;
          $data['table_name'] = 'items';
          $data['table_id'] = $item->id;
          $data['type'] = $notifiType;
          $data['data'] = __('messages_notify.comments_your_post' , [ 'user_name' => $user_sender->name ]);
          $this->store($data);

          // send to parent comment woner
          if ($parent_Comment_user != 0) {
            $data['user_sender_id'] = $user_sender_id;
            $data['user_reciever_id'] = $parent_Comment_user; // parent comment woner
            $data['table_name'] = 'items';
            $data['table_id'] = $item->id;
            $data['type'] = $notifiType;
            $data['data'] = __('messages_notify.comments_your_comment' , [ 'user_name' => $user_sender->name ]);
            $this->store($data);
          }
      }


      // // web
      // if ( in_array( 'web' , $to ) ) {
      //     event(new \App\Events\MainNotification(
      //         $user_receiver->id,
      //         $user_sender->name,
      //         '2',
      //         '', //route('items.show' , ['id' => $item->id ]),
      //         __('messages_notify.comments_your_post' , [ 'user_name' => $user_sender->name ] ) . ' : ' . UtilHelper::currentDate()
      //       )
      //     );
      //
      //     // send to parent comment woner
      //     if ($parent_Comment_user != 0) {
      //       event(new \App\Events\MainNotification(
      //           $parent_Comment_user,
      //           $user_sender->name,
      //           '2',
      //           '', //route('items.show' , ['id' => $item->id ]),
      //           __('messages_notify.comments_your_comment' , [ 'user_name' => $user_sender->name ] ) . ' : ' . UtilHelper::currentDate()
      //         )
      //       );
      //     }
      // }


  }

  public function notifyRate( $to = [] , $params = [] )
  {

      $notifiType = Notification::TYPE_RATE;

      $user_sender_id = $params['user_sender_id'];

      // get user sender
      $user_sender = User::where('id',$user_sender_id)->select('id','name')->first();
      // get current item
      $item = Item::where('id',$params['item_id'])->select('id','client_id')->first();
      // get woner of item
      $item_client = Client::where('id',$item->client_id)->first();
      $user_receiver = $item_client->user;
      if (!$user_receiver){
        return ;
      }


      if ($user_sender_id == $user_receiver->id) {
        return;
      }


      $messageTitle = __('messages_notify.new_rate');
      $messageBody = $msg['body'] = __('messages_notify.rated_your_post' , [ 'user_name' => $user_sender->name ] ) ;
      if ( isset($params['cancel']) ) {
        $messageTitle = __('messages_notify.new_rate');
        $messageBody = $msg['body'] = __('messages_notify.un_rated_your_post' , [ 'user_name' => $user_sender->name ] ) ;
      }


      // prepare for fcm
      $msg['user_sender'] = $user_sender_id;
      $msg['user_reciever'] = $user_receiver->id;
      $msg['item'] = $item->id;
      $msg['title'] = $messageTitle;
      $msg['body'] = $messageBody;
      $msg['type'] = $notifiType;



      // fcm
      if ( in_array( 'fcm' , $to ) ) {
          $response = $this->notifyFcm($user_receiver,$msg);
          if ( $response === false ){}
          // if ($response['result']['failure'] == 1 ){
          //   return false;
          // }
      }


      // db
      if ( in_array( 'db' , $to ) ) {
          $data['user_sender_id'] = $user_sender_id;
          $data['user_reciever_id'] = $user_receiver->id;
          $data['table_name'] = 'items';
          $data['table_id'] = $item->id;
          $data['type'] = $notifiType;
          $data['data'] = $messageBody;
          $this->store($data);
      }


      // web
      // if ( in_array( 'web' , $to ) ) {
      //     event(new \App\Events\MainNotification(
      //         $user_receiver->id,
      //         $user_sender->name,
      //         '3',
      //         '', // route('items.show' , ['id' => $item->id ]),
      //         __('messages_notify.rated_your_post' , [ 'user_name' => $user_sender->name ] ) . ' : ' . UtilHelper::currentDate()
      //       )
      //     );
      // }


  }

  public function notifyNewItem( $to = [] , $params = [] )
  {

      $notifiType = Notification::TYPE_NEW_ITEM;

      $user_sender_id = $params['user_sender_id'];
      $user_receiver_id = $params['user_receiver_id'];

      // get user sender
      $user_sender = User::where('id',$user_sender_id)->select('id','name')->first();
      // get current item
      $item = Item::where('id',$params['item_id'])->select('id','client_id','item_type_id')->first();

      $user_receiver = User::where('id',$user_receiver_id)->select('id','name')->first();
      if (!$user_receiver){
        return ;
      }


      $item_type_title = '';
      $item_type = ItemType::where('id',$item->item_type_id)->first();

      if($item_type){
        $item_type_title = $item_type->getTitle();
      }

      // prepare for fcm
      $msg['user_sender'] = $user_sender_id;
      $msg['user_reciever'] = $user_receiver->id;
      $msg['item'] = $item->id;
      $msg['title'] = __('messages_notify.new' , [ 'var' => $item_type_title ] );
      $msg['body'] = __('messages_notify.new' , [ 'var' => $item_type_title ] ) ;
      $msg['type'] = $notifiType;


      // fcm
      if ( in_array( 'fcm' , $to ) ) {
          $response = $this->notifyFcm($user_receiver,$msg);
          if ( $response === false ){}
          // if ($response['result']['failure'] == 1 ){
          //   return false;
          // }
      }


      // db
      if ( in_array( 'db' , $to ) ) {
          $data['user_sender_id'] = $user_sender_id;
          $data['user_reciever_id'] = $user_receiver->id;
          $data['table_name'] = 'items';
          $data['table_id'] = $item->id;
          $data['type'] = $notifiType;
          $data['data'] = __('messages_notify.new' , [ 'var' => $item_type_title ] );
          $this->store($data);
      }


      // web
      // if ( in_array( 'web' , $to ) ) {
      //     event(new \App\Events\MainNotification(
      //         $user_receiver->id,
      //         $user_sender->name,
      //         '3',
      //         '', // route('items.show' , ['id' => $item->id ]),
      //         __('messages_notify.rated_your_post' , [ 'user_name' => $user_sender->name ] ) . ' : ' . UtilHelper::currentDate()
      //       )
      //     );
      // }


  }

  public function notifyShat( $to = [] , $params = [] )
  {

      $notifiType = Notification::TYPE_SHAT;

      $user_sender_id = $params['user_sender_id'];
      $user_receiver_id = $params['user_reciever_id'];

      // get user sender
      $user_sender = User::where('id',$user_sender_id)->select('id','name')->first();
      $user_receiver = User::where('id',$user_receiver_id)->select('id','name')->first();
      if (!$user_receiver){
        return ;
      }


      // create chat record if no chat exisits between these tow users
      $sendRecievExists = Chat::where([ 'sender_user_id' => $user_sender_id  , 'receiver_user_id' =>  $user_receiver_id ])->exists();
      $recievSendExists = Chat::where([ 'sender_user_id' => $user_receiver_id  , 'receiver_user_id' => $user_sender_id  ])->exists();
      if ( $sendRecievExists == false && $recievSendExists == false ){
        // its new chat
        Chat::create([ 'sender_user_id' => $user_sender_id , 'receiver_user_id' => $user_receiver_id  , 'ip' =>  UtilHelper::getUserIp() ]);
      }


      // prepare for fcm
      $msg['user_sender'] = $user_sender_id;
      $msg['user_reciever'] = $user_receiver->id;
      $msg['item'] = 0;
      $msg['title'] = __('messages_notify.new' , [ 'var' => __('project.shat') ] );
      $msg['body'] = __('messages_notify.new' , [ 'var' => __('project.shat') ] ) ;
      $msg['type'] = $notifiType;


      // fcm
      if ( in_array( 'fcm' , $to ) ) {
          $response = $this->notifyFcm($user_receiver,$msg);
          if ( $response === false ){}
          // if ($response['result']['failure'] == 1 ){
          //   return false;
          // }
      }


      // db
      if ( in_array( 'db' , $to ) ) {
          $data['user_sender_id'] = $user_sender_id;
          $data['user_reciever_id'] = $user_receiver->id;
          $data['table_name'] = '';
          $data['table_id'] = 0;
          $data['type'] = $notifiType;
          $data['data'] = __('messages_notify.new' , [ 'var' => __('project.shat') ] );
          $this->store($data);
      }


      // web
      // if ( in_array( 'web' , $to ) ) {
      //     event(new \App\Events\MainNotification(
      //         $user_receiver->id,
      //         $user_sender->name,
      //         '3',
      //         '', // route('items.show' , ['id' => $item->id ]),
      //         __('messages_notify.rated_your_post' , [ 'user_name' => $user_sender->name ] ) . ' : ' . UtilHelper::currentDate()
      //       )
      //     );
      // }




  }

  public function notifyFollow( $to = [] , $params = [] )
  {

      $notifiType = Notification::TYPE_FOLLOW;

      $user_sender_id = $params['user_sender_id'];
      $user_receiver_id = $params['user_reciever_id'];

      // get user sender
      $user_sender = User::where('id',$user_sender_id)->select('id','name')->first();
      $user_receiver = User::where('id',$user_receiver_id)->select('id','name')->first();
      if (!$user_receiver){
        return ;
      }


      // prepare for fcm
      $msg['user_sender'] = $user_sender_id;
      $msg['user_reciever'] = $user_receiver->id;
      $msg['item'] = 0;
      $msg['title'] = __('messages_notify.new' , [ 'var' => __('project.follow') ] );
      $msg['body'] = __('messages_notify.new' , [ 'var' => __('project.follow') ] ) ;
      $msg['type'] = $notifiType;


      // fcm
      if ( in_array( 'fcm' , $to ) ) {
          $response = $this->notifyFcm($user_receiver,$msg);
          if ( $response === false ){}
          // if ($response['result']['failure'] == 1 ){
          //   return false;
          // }
      }


      // db
      if ( in_array( 'db' , $to ) ) {
          $data['user_sender_id'] = $user_sender_id;
          $data['user_reciever_id'] = $user_receiver->id;
          $data['table_name'] = '';
          $data['table_id'] = 0;
          $data['type'] = $notifiType;
          $data['data'] = __('messages_notify.new' , [ 'var' => __('project.shat') ] );
          $this->store($data);
      }


      // web
      // if ( in_array( 'web' , $to ) ) {
      //     event(new \App\Events\MainNotification(
      //         $user_receiver->id,
      //         $user_sender->name,
      //         '3',
      //         '', // route('items.show' , ['id' => $item->id ]),
      //         __('messages_notify.rated_your_post' , [ 'user_name' => $user_sender->name ] ) . ' : ' . UtilHelper::currentDate()
      //       )
      //     );
      // }


  }

  public function notifyFcm($user,$data)
  {

      $validate = $this->validateFcmSend($user,$data);
      if ($validate !== true) {
        return $validate;
      }

      return $this->sendFcm($user->mobile_type,$user->fcm_token,$data);

  }

  public function validateFcmSend($user,$data)
  {

      if (! $user) {
        return 'Select User';
      }

      if (! $user->fcm_token ) {
        return 'Token Not Found';
      }

      if (! $user->mobile_type ) {
        return 'No Mobile Type Found';
      }

      return true;

  }

  public function store($data)
  {
    // store notification in db
    Notification::Create($data);
  }



  public function getNotificationByUserId($userId)
  {
    $data = Notification::with('user_sender')->where('user_reciever_id',$userId)->orderby('id','desc')->paginate(10);
    foreach ($data as $notifi) {
      $notifi->item_type = null;
      $item = Item::find($notifi->table_id);
      if ($item){
        $itemType = ItemType::where('id',$item->item_type_id)->first();
        if ($itemType) {
          $notifi->item_type = $itemType->id;
        }
      }
    }
    return $data;

  }

  public function getUnreadNotificationByUserId($userId)
  {
    return Notification::with('user_sender','item_type')->where('user_reciever_id',$userId)->Unread()->orderby('id','desc')->paginate(10);
  }



  public function updateReadAt($notificationId)
  {

    $notification = Notification::findOrFail($notificationId);
    $notification->update(['read_at' => UtilHelper::currentDate()]);

    return true;

  }


  public function notifyWeb($id)
  {

    // ??????????????????
    //
    // $user = User::find($id);
    //
    // $data['order_id'] = $order->id;
    // $data['title'] = __('order.status_2');
    // $data['body'] = $order->id . __('order.status_2');

    return $this->sendFcmWeb();

  }


}

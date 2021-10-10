<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\File as Ffile;


class FileController extends Controller
{
    public function download(Request $request)
    {
        $path = '/home/mshaheer7jazi/public_html/storage/app'.$request->file;

        if (file_exists($path)){
          return response()->download( $path );
        }
        abort(404,__('file.file_not_found'));
    }

    public function delete(Request $request)
    {
        $file = File::find($request->id);
        if ($file){
            $file->delete();
            Ffile::delete('/home/mshaheer7jazi/public_html/storage/app/'.$file->file_name);

            if ($request->ajax()) {
              return response()->json(['status'=>'success', 'msg'=>__('messages.deleted'), 'alert'=>'swal' ]);
            }
            $this->flashAlert([ 'success' => ['msg'=> __('messages.deleted') ] ]);
            return back();
        }


    }


}

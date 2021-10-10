<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\pSupervisorData;

class HelperController extends AdminController
{
    public function readMore(Request $request)
    {

      switch ($request->model) {
        case "supervisor_data":
          $data = pSupervisorData::where('id' ,$request->id )->select($request->field)->firstorfail();
          break;
        case "blue":
          echo "Your favorite color is blue!";
          break;
        case "green":
          echo "Your favorite color is green!";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
      }


      if ($data) {
        return response()->json([ 'status' => 'success' , 'html' => $data->{$request->field} ]);
      }

      return response()->json([ 'status' => 'success' , 'html' => 'No data' ]);

    }
}

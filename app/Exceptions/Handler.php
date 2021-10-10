<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Traits\ApiResponse;

class Handler extends ExceptionHandler
{
    use ApiResponse;
    protected $dontReport = [
        //
    ];


    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];


    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    public function render($request, Throwable $exception)
    {

      // for inactive and deleted users
      if($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException ){
        $error = $exception->getMessage();
        $response = [ 'errors' => $error ];
        return $this->responseUnauthorized($response,401);
      }


      if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
          if (request()->is('admin/*')) {
            return redirect(route('admin.home'));
          } else {
            return redirect('/');
          }
      }


      if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
        if ($request->expectsJson()) {
          $response = [ 'errors' => [ 'record' => [trans('messages.no_data_found')] ] ];
          return $this->responseFaild($response,404);
        }
      }


      if ($exception instanceof \Illuminate\Validation\ValidationException ) {
        if ($request->expectsJson()) {
          $error = '';
          $errors = $exception->validator->messages()->getMessages();
          foreach ($errors as $message)
          { $error = $error . $message[0]; }

          $response = [ 'errors' => [ 'validation' => $error ] ];
          return $this->responseFaild($response,422);
      }
    }

        return parent::render($request, $exception);
    }
}

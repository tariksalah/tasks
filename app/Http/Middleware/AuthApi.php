<?php

namespace App\Http\Middleware;
use Closure;

class AuthApi
{
    public function handle($request, Closure $next)
    {
      if (auth('api')->check()) {
          $user = auth('api')->user();
          $userServ = new \App\Services\UserService();
          $userServ->checkDeleted($user);
          $userServ->checkActive($user);
          $userServ->checkActiveAdmin($user);
      }

      return $next($request);
    }
}

<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\VerificationService;
use App\User;
use App\Helpers\UtilHelper;
use Auth;

class VerificationController extends Controller
{
    private $verificationServ;

    public function __construct(VerificationService $verificationService)
    {
      $this->verificationServ = $verificationService;
    }

    public function show()
    {
        // save current user in session , and logout to can make the other users go to login page
        // so check if auth user bcause user can refresh the page so no user after logged out
        if (Auth::check()) {
            if(auth()->user()->isVerified(1)) {
              return redirect()->route('admin.home');
            }

            session(['user' => Auth::user()->id]);
            Auth::logout();
        }

        if (session()->has('user')) {
            $userVerification = $this->verificationServ->getUserVerification(session('user'));
            if (!$userVerification) {
              return redirect()->route('admin.login');
            }
            $code = $userVerification->code;
            return view('util.verification.show',compact('code'));
        } else {
            return redirect()->route('admin.login');
        }

    }

    public function check(Request $request)
    {

        if (session()->has('user')) {
            $user = User::where('id' , session('user'))->first();
            if (! $user) {
              return redirect()->route('admin.login');
            }

            if($user->isVerified(1)) {
              return redirect()->route('admin.home');
            }

            $userVerification = $this->verificationServ->getUserVerification($user->id);
            if (!$userVerification) {
              return redirect()->route('admin.login');
            }

            $checkVerificationCode = $this->verificationServ->checkVerificationCode($userVerification,$request->code);
            if (!$checkVerificationCode) {
              return back()->withinput()->withErrors(['code' => __('verification.wrong_verification_code') ]);
            }

            session()->forget('user');
            Auth::login($user);
            return redirect()->route('admin.home');
        }

        return redirect()->route('admin.login');

    }

    public function resendCode()
    {

      if (! session()->has('user')) {
          return redirect(route('admin.login'));
      }

      $verificationCode = $this->verificationServ->createVerification(session('user'));
      session(['user' => session('user')]);


      return redirect(route('util.verification.show'));

    }


}

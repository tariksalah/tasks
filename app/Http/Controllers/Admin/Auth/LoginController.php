<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Traits\WebTrait;
use App\User;
use App\Helpers\RecaptchaHelper;

class LoginController extends Controller
{

    use AuthenticatesUsers; // , ThrottlesLogins
    use WebTrait;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


     // The maximum number of attempts to allow
     protected $maxAttempts = 5;
     //
     // // The number of minutes to throttle for
     protected $decayMinutes = 2;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        return route('admin.home');
        // return route('admin.splash');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {

        $this->validateLogin($request);
        // $this->verifyRecaptcha($request);


        // new to send message if username doesnt exist
        $user = User::where( $this->username() , $request->{$this->username()})->first();
        if (! $user){
          return redirect()->back()->withErrors([$this->username() =>[trans('auth.failed_user')]]);
        }
        //---------------------

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        // if (method_exists($this, 'hasTooManyLoginAttempts') &&
        //     $this->hasTooManyLoginAttempts($request)) {
        //     $this->fireLockoutEvent($request);
        //
        //     return $this->sendLockoutResponse($request);
        // }

        if ($this->attemptLogin($request)) {
          return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        // $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    // protected function hasTooManyLoginAttempts(Request $request)
    // {
    //     return $this->limiter()->tooManyAttempts(
    //         $this->throttleKey($request), 2, 2
    //     );
    // }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        // $this->flashAlert([
        //   'info' => ['msg'=> __('auth.login_welcome'),'type'=>'swal']
        // ]);
        $this->flashAlert([ 'success' => ['msg'=> __('auth.login_welcome')] ]);

        return $request->wantsJson()
                    ? new Response('', 204)
                    : redirect()->intended($this->redirectPath());
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        // throw ValidationException::withMessages([
        //     $this->username() => [trans('auth.failed_password')],
        // ]);

        throw ValidationException::withMessages([
            'password' => [trans('auth.failed_password')],
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    public function username()
    {
        return 'user_name'; //'email';
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            // 'g-recaptcha-response' => 'required',
        ]);
    }

    protected function verifyRecaptcha(Request $request)
    {
        if (! RecaptchaHelper::verify( $request->input('g-recaptcha-response') ) ) {
          throw ValidationException::withMessages([
              'g-recaptcha-response' => [trans('auth.failed_google_recaptcha')],
          ]);
        }
    }



    protected function redirectAfterLogout()
    {
        return route('admin.login');
    }

    protected function authenticated(Request $request, $user)
    {
        //
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect()->route('admin.login');
    }

}

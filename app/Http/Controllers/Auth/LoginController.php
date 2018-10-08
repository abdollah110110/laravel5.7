<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Events\UserActivation;

class LoginController extends Controller
{
    use AuthenticatesUsers;


    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if(auth()->validate($request->only('email', 'password'))){

            $user = User::whereEmail($request->input('email'))->first();

            if($user->active == 0){
                $checkActivationCode = $user->activations()
                                            ->where('expire', '>', Carbon::now())
                                            ->latest()
                                            ->first();

                if($checkActivationCode != null && count($checkActivationCode) == 1){
                    $this->incrementLoginAttempts($request);

                    session()->flash('success', 'کد فعال سازی برای شما ارسال شده است. لطفا به ایمیل خودتان مراجعه کنید و کد را فعال کنید.');
                }
                else{
                    session()->flash('success', 'کد فعال سازی جدیدی به ایمیلتان ارسال شد. لطفا به ایمیل خودتان مراجعه کنید و فعال سازی را انجام دهید.');
                    event(new UserActivation($user));
                }

                return back();
            }


        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
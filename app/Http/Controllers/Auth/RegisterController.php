<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Events\UserActivation;

class RegisterController extends MainController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function register(Request $request)
    {
        
        $this->validate($request, [
            'first_name' => 'required|string|min:3|max:255|regex:/^[ آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'last_name' => 'required|string|min:3|max:255|regex:/^[ آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|regex:/^09[0-9]{9}$/',
            'phone' => 'regex:/^[0-9]{2}[0-9]{9}/',
            'post_code' => 'required|regex:/^[0-9]{10}$/',
            'state' => 'required|alpha',
	    'address' => 'required|max:1000',
        ]);
		
	$user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'phone' => ($request->phone != null ? $request->phone : null ),
            'post_code' => $request->post_code,
            'address' => $request->state . ' - ' . $request->address,
        ]);
        
//        event(new UserActivation($user));
        
        session()->flash('success', 'عضویت شما با موفقیت انجام شد. لطفاً جهت ورود به سایت به ایمیل خود بروید و لینک فعالسازی را کلیک کنید.');
        
        return redirect(route('home'));
    }

}
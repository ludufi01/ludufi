<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use DB;
use Carbon\Carbon;
use Mail;


class RegisterController extends Controller
{
	public function register()
    {
		return view('auth.register');
    }

    public function store(Request $request)
    {
          $request->validate([
              'first_name' => 'required|string|max:255',
              'last_name' => 'required|string|max:255',
              'email' => 'required|string|email|max:255|unique:users',
              'username' => 'required|string|max:255|unique:users',
              'mobile' => 'required|min:3|unique:users',
              'password' => 'required|same:confirm_password|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x]).*$/|',
              'confirm_password' => 'required',
			  'g-recaptcha-response' => 'required|recaptcha',
          ],[
			  'password.regex' => 'Must contain atleast 1 UPPERCASE 1 lowercase 1 number and 1 special character',
		  ]);
			$code=mt_rand(1000, 9999);
          User::create([
              'first_name' => $request->first_name,
              'last_name' => $request->last_name,
              'email' => $request->email,
              'username' => $request->username,
              'country' => $request->cname,
              'mobile' => $request->mobile,
              'status' => 0,
              'code' => $code,
              'type' => 0,
              'notification' => 0,
              'quiz' => 0,
              'ronin_wallet' => 0,
              'password' => Hash::make($request->password),
          ]);
		Mail::send('auth.password.verify', ['code' => $code], function($message) use ($request) {
			  $message->from('ishal.s12345@gmail.com');
			  $message->to($request->email);
			  $message->subject('Reset Password Notification');
		   });
		session(['userEmail' => $request->email]);
          return redirect('verify-code')->with('status', 'Code Send to your Email');
      }

	public function verifyCode()
	{
		return view('auth.password.verify-code');
	}
	  
    public function verificationCode(Request $request)
    {
			$userEmail=$request->session()->get('userEmail');
			$user = User::where('email',$userEmail)->first();
			$request->validate([
				  'code' => 'required',
			]);
			
			if($request->code==$user->code)
			{
				$user->status=1;
				$user->save();
				
				return redirect()->route('login')->with('success','User Verified');
				
			}	else {
				$code=mt_rand(1000, 9999);
				$user->code=$code;
				$user->save();
				Mail::send('auth.password.verify', ['code' => $code], function($message) use ($request) {
                  $message->from('ishal.s12345@gmail.com');
                  $message->to($request->session()->get('userEmail'));
                  $message->subject('Reset Password Notification');
               });
			   
				return redirect()->route('verify-code')->with('status', 'Code Send to your Email');
			}
    }
}

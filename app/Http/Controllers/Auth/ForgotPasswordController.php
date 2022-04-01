<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;

class ForgotPasswordController extends Controller
{
    public function getEmail()
    {
		return view('auth.password.login_password_recover');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
        $user = User::where('email',$request->email)->first();
		$code=mt_rand(1000, 9999);
        $user->code = $code;
        $user->save();

        Mail::send('auth.password.verify', ['code' => $code], function($message) use ($request) {
                  $message->from('ishal.s12345@gmail.com');
                  $message->to($request->email);
                  $message->subject('Reset Password Notification');
               });
		
		session(['userEmail' => $request->email]);
		return redirect()->intended('verification')->with('status', 'Code Send to your Email');
    }

    public function verification()
    {
		return view('auth.password.verification');
    }
	
    public function verifycode(Request $request)
    {
			$userEmail=$request->session()->get('userEmail');
			$user = User::where('email',$userEmail)->first();
			
			$request->validate([
				  'code' => 'required',
			]);
			
			if($request->code==$user->code)
			{				
				return redirect()->route('resetpass')->with('success','Code Verified Please Enter New Password');
			}	else {
				$code=mt_rand(1000, 9999);
				$user->code=$code;
				$user->save();
				Mail::send('auth.password.verify', ['code' => $code], function($message) use ($request) {
                  $message->from('ishal.s12345@gmail.com');
                  $message->to($request->session()->get('userEmail'));
                  $message->subject('Reset Password Notification');
               });
			   
				return redirect()->route('verification')->with('error', 'Code is incorrect.Please Check you Email');
			}
    }

}

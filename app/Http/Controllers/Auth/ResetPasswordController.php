<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use Hash;

class ResetPasswordController extends Controller
{
    public function getPassword() {
		return view('auth.password.reset-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',

        ]);
		
          $user = User::where('email', $request->session()->get('userEmail'))
                      ->update(['password' => Hash::make($request->password)]);
					  
		  $request->session()->forget('userEmail');
          return redirect('/login')->with('success', 'Your password has been changed!');

    }
}

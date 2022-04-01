<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
		  return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
		if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
        $user = User::where(['email' => $request->email])->first();
		}	else {
        $user = User::where(['username' => $request->email])->first();
		}
		if($user)	{
			if((Hash::check($request->password, $user->password))){
                Auth::guard('user')->login($user);
				return redirect()->intended('home');
			}	else {
				return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
			}
		}
		
        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::guard('user')->logout();

      return redirect('login');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class AuthController extends Controller
{
    //
    public function handlerAuth()
    {
        return view('client.auth.login');
    }

    public function handlerVerify(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = Account::verifyAccount($username, $password);

        if ($user) {
            $request->session()->put('user', $user);
            return redirect()->route('client.home');
        }

        return redirect()->back()->withErrors(['login' => 'Tài khoản hoặc mật khẩu không đúng.']);
    }

    public function handlerLogout(Request $request)
    {
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect()->route('auth.login'); 
    }
}

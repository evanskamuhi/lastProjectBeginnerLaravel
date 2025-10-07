<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function verify(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password, "role" => "admin"])) {
            $request->session()->regenerate();
            return redirect()->intended("/admin/index");
        } elseif (Auth::guard("user")->attempt(["email" => $request->email, "password" => $request->password, "role" => "user"])) {
            $request->session()->regenerate();
            return redirect()->intended("/user/index");
        } else {
            return redirect()->route("login");
        }
    }
    
    public static function logout()
    {
        if (Auth::guard("admin")->check()) {
            Auth::guard("admin")->logout();
        } elseif (Auth::guard("user")->check()) {
            Auth::guard("user")->logout();
        }
        
        return redirect()->route("login");
    }
}

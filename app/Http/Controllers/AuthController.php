<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function get_login()
    {
        return view('auth.login');
    }

    public function login($data)
    {
        $credentials = ['email' => $data['email'], 'password' => $data['password']];

        if(Auth::attempt($credentials)) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('message', 'Not Authorized');
        }
    }

    public function auth(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => 'email|required',
            'password' => 'required|string|min:6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('message', 'Not Authorized');
        }

        if ($data['type'] == 'login') {
            return self::login($data);

        } else if($data['type'] == 'register') {
            $user = User::where('email', $data['email'])->first();

            if ($user != null) {
                return redirect()->back()->with('message', 'Email Already Used!');
            } else {
                User::create([
                    'name' => 'staff',
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);

                return self::login($data);
            }

        } else {
            return redirect()->back()->with('message', 'Not Authorized');
        }


    }

    public function get_logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}

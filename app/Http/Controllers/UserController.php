<?php

namespace App\Http\Controllers;

use Response;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $temp = User::create([
            'email' => $request->email,
            'password' => hash::make($request->password),
        ]);

        return response()->json(['success' => 'user registered succesfully']);
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);
        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {

                $data = User::where('email', $request->email)->firstOrFail();

                session([
                    'userid' => $data['id'],
                    'username' => $data['name'] ?? $data['email'],
                    'useremail' => $data['email'],
                    'profile_img' => $data['profile_img'] ?? './assets/01.svg',
                    'prem_status' => $data['prem_status'],
                    'logedin' => true,
                ]);

                return response()->json(['success' => 'user login succesfully']);
            } else {
                return response()->json(['success' => 'invalid useremail or password']);
            }
        }


    }
    public function logout(Request $request)
    {
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
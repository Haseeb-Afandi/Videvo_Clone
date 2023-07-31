<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use File;

class LoginWithGoogleController extends Controller
{
     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);

                $data = User::where('google_id', $user->id)->first();

                session([
                    'userid' => $data['id'],
                    'username' => $data['name'] ?? $data['email'],
                    'useremail' => $data['email'],
                    'profile_img' => $data['profile_img'] ?? './assets/01.svg',
                    'prem_status' => $data['prem_status'],
                    'logedin' => true,
                ]);
      
                return redirect()->intended('/');
       
            }else{

                function getSocialAvatar($file, $user){
                    $fileContents = file_get_contents($file);
                    return File::put(public_path('images') . $user->getId() . ".jpg", $fileContents);
                }

                $profile_img = $user->avatar;



                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'profile_img'=> $profile_img,
                    'password' => encrypt('123456dummy')
                ]);

      
                Auth::login($newUser);

                $data = User::where('google_id', $user->id)->first();

                session([
                    'userid' => $data['id'],
                    'username' => $data['name'] ?? $data['email'],
                    'useremail' => $data['email'],
                    'profile_img' => $data['profile_img'] ?? './assets/01.svg',
                    'prem_status' => $data['prem_status'],
                    'logedin' => true,
                ]);
      
                return redirect()->intended('/');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

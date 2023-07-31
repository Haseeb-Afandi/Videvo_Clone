<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  
class FacebookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
           
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = User::where('facebook_id', $user->id)->first();
         
            if($finduser){
         
                Auth::login($finduser);

                $data = User::where('facebook_id', $user->id)->first();

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

                // print_r($user->getAvatar());
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'facebook_id'=> $user->id,
                        'password' => encrypt('123456dummy')
                    ]);
        
                Auth::login($newUser);

                $data = User::where('facebook_id', $user->id)->first();

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
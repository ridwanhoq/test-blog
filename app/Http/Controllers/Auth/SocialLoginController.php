<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToProvider(String $provider){
        return Socialite::driver($provider)->redirect();
    }

    public function providerCallback(String $provider){
        try{
            $social_user = Socialite::driver($provider)->user();

            // First Find Social Account
            $account = User::where([
                'provider_name'=>$provider,
                'provider_id'=>$social_user->getId()
            ])->first();

            dd('test');

            // If Social Account Exist then Find User and Login
            if($account){
                auth()->login($account->user);
                return redirect()->route('home');
            }

            // Find User
            $user = User::where([
                'email'=>$social_user->getEmail()
            ])->first();

            // If User not get then create new user
            if(!$user){
                $user = User::create([
                    'email'=>$social_user->getEmail(),
                    'name'=>$social_user->getName()
                ]);
            }

            // Create Social Accounts
            $user->socialAccounts()->create([
                'provider_id'=>$social_user->getId(),
                'provider_name'=>$provider
            ]);

            // Login
            auth()->login($user);
            return redirect()->route('home');

        }catch(\Exception $e){
            return redirect()->route('login');
        }
    }   

    public function test(){
        $user = Socialite::driver('facebook')->user();
        $isUser = User::where('fb_id', $user->id)->first();
 
        if($isUser){
            Auth::login($isUser);
            return redirect('/dashboard');
        }else{
            $createUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'fb_id' => $user->id,
                'password' => encrypt('admin@123')
            ]);

            Auth::login($createUser);
            return redirect('/dashboard');
        }
    }
}

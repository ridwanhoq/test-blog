<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use GoogleClient;

class SocialLoginController extends Controller
{
    public function redirectToProvider(String $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function providerCallback(String $provider)
    {
        try {
            $social_user = Socialite::driver($provider)->user();

            // First Find Social Account
            $account = User::where([
                'provider_name' => $provider,
                'provider_id' => $social_user->getId()
            ])->first();

            dd('test');

            // If Social Account Exist then Find User and Login
            if ($account) {
                auth()->login($account->user);
                return redirect()->route('home');
            }

            // Find User
            $user = User::where([
                'email' => $social_user->getEmail()
            ])->first();

            // If User not get then create new user
            if (!$user) {
                $user = User::create([
                    'email' => $social_user->getEmail(),
                    'name' => $social_user->getName()
                ]);
            }

            // Create Social Accounts
            $user->socialAccounts()->create([
                'provider_id' => $social_user->getId(),
                'provider_name' => $provider
            ]);

            // Login
            auth()->login($user);
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }

    public function test()
    {
        $user = Socialite::driver('facebook')->user();
        $isUser = User::where('fb_id', $user->id)->first();

        if ($isUser) {
            Auth::login($isUser);
            return redirect('/dashboard');
        } else {
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

    public function androidGoogleLogin()
    {

        // 
        $client = new \PulkitJalan\Google\Client([
            'client_id' => 'YOUR_CLIENT_ID',
            'client_secret' => 'YOUR_SECRET', 
            'redirect_uri' => 'YOUR_REDIRECT_URI', 
            'developer_key' => 'YOUR_KEY'
        ]);
        $google = $client->getClient();
        $google->authenticate($token);
        $access_token = $client->getAccessToken()["access_token"];

        //and now here you go
        $user = Socialize::driver('google')->userFromToken($access_token);

        // 
        $client = new GoogleClie([
            'client_id' => config('services.google.client_id'),
            'client_secret' => config('services.google.client_secret')
        ]);

        $data = $client->fetchAccessTokenWithAuthCode($code);

        $user = Socialite::driver('google')->scopes(['profile', 'email'])->userFromToken($data['access_token']);
    }
}

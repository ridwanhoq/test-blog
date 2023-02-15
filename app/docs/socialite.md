
2. Set Up the Facebook SDK for Javascript
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

3. Check Login Status

FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});



{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}



status specifies the login status of the person using the app. The status can be one of the following:

    connected - the person is logged into Facebook, and has logged into your app.
    not_authorized - the person is logged into Facebook, but has not logged into your app.
    unknown - the person is not logged into Facebook, so you don't know if they've logged into your app or FB.logout() was called before and therefore, it cannot connect to Facebook. 

authResponse is included if the status is connected and is made up of the following:

    accessToken - contains an access token for the person using the app.
    expiresIn - indicates the UNIX time when the token expires and needs to be renewed.
    signedRequest - a signed parameter that contains information about the person using the app.
    userID - the ID of the person using the app. 

Once your app knows the login status of the person using it, it can do one of the following:

    If the person is logged into Facebook and your app, redirect them to your app's logged in experience.
    If the person isn't logged into your app, or isn't logged into Facebook, prompt them with the Login dialog with FB.login() or show them the Login Button. 



    4. Add the Facebook Login Button

    
<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

-----------------------------

ridwanhoque.riseuplabs@gmail.com
D4

facebook
app-id : 575456097765847
secret : 136ce7aa6719430cba0a30b78be9127b

google
368956610470-akq7sibm221ea26v7cn42cfene424cs8.apps.googleusercontent.com
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
------------------------------------------------------------------------------------

$client = new \PulkitJalan\Google\Client(['client_id' => 'YOUR_CLIENT_ID', 'client_secret' => 'YOUR_SECRET', 'redirect_uri' => 'YOUR_REDIRECT_URI', 'developer_key' => 'YOUR_KEY']);
$google = $client->getClient();
$google->authenticate($token);
$access_token = $client->getAccessToken()["access_token"];

//and now here you go
$user = Socialize::driver('google')->userFromToken($access_token);

--------------------------------------------------------------------------------------

$client = new Google_Client([
    'client_id' => config('services.google.client_id'),
    'client_secret' => config('services.google.client_secret')
]);

$data = $client->fetchAccessTokenWithAuthCode($code);

$user = Socialite::driver('google')->scopes(['profile','email'])->userFromToken($data['access_token']);

--------------------------------------------------------------------------------------

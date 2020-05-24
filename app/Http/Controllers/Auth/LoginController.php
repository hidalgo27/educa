<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\RoleUser;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        Session::flash('url',$_SERVER['HTTP_REFERER']);
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
//        $user = Socialite::driver('github')->user();

        // $user->token;

        $facebookUser = Socialite::driver('facebook')->user();
        $user = User::where('provider_id', $facebookUser->getId())->first();


        if (!$user){
            $user = User::create([
                'email' => $facebookUser->getEmail(),
                'name' => $facebookUser->getName(),
                'avatar' => $facebookUser->getAvatar(),
                'avatar_original' => $facebookUser->avatar_original,
                'provider_id' => $facebookUser->getId(),
            ]);
            if ($user){
                $user_rol = new RoleUser();
                $user_rol->role_id = 2;
                $user_rol->user_id = $user->id;
                $user_rol->save();
            }
        }

        Auth::login($user, true);

//        return Redirect::to(Session::get('url'));
        return redirect(RouteServiceProvider::HOME);

    }

}

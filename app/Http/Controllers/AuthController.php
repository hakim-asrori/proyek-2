<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Auth;
use Hash;
use Socialite;
use App\Models\User;


class AuthController extends Controller
{
	// use AuthenticatesUsers;

	protected $redirectTo = RouteServiceProvider::HOME;

	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	public function google()
	{
		return Socialite::driver('google')->redirect();
	}

	public function google_callback()
	{
		try {

			$user = Socialite::driver('google')->stateless()->user();

            /// lakukan pengecekan apakah google id nya sudah ada apa belum
			$isUser = User::where('google_id', $user->id)->first();

            /// jika sudah ada, langsung login
			if($isUser){

				Auth::login($isUser);
				Session::put('logged_in', $isUser);
				return redirect('/');

            } else { /// jika belum ada, register baru

            	$createUser = new User;
            	$createUser->name =  $user->getName();

                /// mendapatkan email dari google
            	if($user->getEmail() != null){
            		$createUser->email = $user->getEmail();
            		$createUser->email_verified_at = \Carbon\Carbon::now();
            	}  

                /// tambahkan google id
            	$createUser->google_id = $user->getId();

                /// membuat random password
            	$rand = rand(111111,999999);
            	$createUser->password = Hash::make($user->getName().$rand);

                /// save
            	$createUser->save();

                /// login
            	Auth::login($createUser);
            	Session::put('logged_in', $createUser);
            	return redirect('/');
            }

        } catch (Exception $exception) {
        	dd($exception->getMessage());
        }
    }

    public function login(Request $request)
    {
    	$email = $request->email;

    	
    }

    public function logout()
    {
    	Session::flush();
    	return redirect('/');
    }
}

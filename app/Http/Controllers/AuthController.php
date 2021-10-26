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
				return redirect('/')->with('message', "<script>Swal.fire('Wooww', 'Selamat anda berhasil login', 'success')</script>");

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
            	$createUser->id_role = 2;

                /// membuat random password
            	$rand = rand(111111,999999);
            	$createUser->password = Hash::make($user->getName().$rand);

                /// save
            	$createUser->save();

                /// login
            	Auth::login($createUser);
            	Session::put('logged_in', $createUser);
            	Session::put('id_role', $createUser->id_role);
            	return redirect('/')->with('message', "<script>Swal.fire('Wooww', 'Selamat anda berhasil login', 'success')</script>");
            }

        } catch (Exception $exception) {
        	dd($exception->getMessage());
        }
    }

    public function login(Request $request)
    {
    	$request->validate([
    		'email' => 'required',
    		'password' => 'required|min:6',
    	]);

    	$user = User::where("email", $request->email)->first();

    	if ($user) {
    		if (Hash::check($request->password, $user->password)) {
    			Session::put('logged_in', $user);
    			Session::put('id_role', $user->id_role);
    			return redirect('/')->with('message', "<script>Swal.fire('Wooww', 'Selamat anda berhasil login', 'success')</script>");
    		} else {
    			return redirect('/')->with('message', "<script>Swal.fire('Ooops', 'Harap periksa kembali akun anda!', 'error');</script>");
    		}
    	} else {
    		return redirect('/')->with('message', "<script>Swal.fire('Ooops', 'Harap periksa kembali akun anda!', 'error');</script>");
    	}
    }

    public function register(Request $request)
    {
    	$request->validate([
    		'email' => 'required|unique:users,email',
    		'password' => 'required|min:6',
    	]);

    	User::create([
    		'name' => $request->nama,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    	]);

    	return redirect('/')->with('message', "<script>Swal.fire('Wooww!', 'Selamat registrasi berhasil', 'success');</script>");
    	
    	
    }

    public function logout()
    {
    	Session::flush();
    	return redirect('/')->with('message', "<script>Swal.fire('Wooww!', 'Selamat anda berhasil logout', 'success');</script>");
    }
}

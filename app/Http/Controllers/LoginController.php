<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller

{

function log()
    {
        //return Hash::make('123');

        $login = "Login";

        return view('login', ['login' => $login]);
    }

    function logPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/hom')->with('success', 'Login Berhasil');
        }
        return back()->with('error', 'email or password salah');
    }

    function registerPost(Request $request)
    {
        $User = new User();

        $User->name = $request->nama;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);

        $User->save();

        return back()->with('success', 'Register Berhasil');
    }

    // function create(Request $request){
    //     $login = $request -> only("email", "password");
    //     if(Auth::guard("login")->attempt($login)){
    //         return redirect("/home");
    //     }else{
    //         return redirect("/login")->with("error","username atau password salah");
    //     }
    // }

    function logout(){

        Auth::logout();

        return redirect()->route('log');
    }

function register()
    {

        $user = auth()->user();

        if($user->level=='petugas'){return abort(404);}
        $regis = "Registrasi";

        return view('register', ['regis' => $regis]);
    }

}
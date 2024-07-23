<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;



class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function ceklogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'psw' => ['required'],
        ]);
       // dd(Hash::make($request->input('password')));
        //$credentials = $request->only('username','psw');
        
    

        $user = User::where('username','=',$request->username)->first();
        if($user && Hash::check($request->psw, $user->psw)){
            $request->session()->regenerate();
            Auth::login($user);
            if(Auth::check()){
                return response()->json(true);   
            }else{
                return response()->json('not login');
            }
            
        }else{
            return response()->json('Wrong Username or Password');
        }
        /*    if (Auth::attempt($credentials)) {
           // $request->session()->regenerate();
 
            return response()->json(true);
        }else{
            return response()->json('username'.$request->username.' atau password'.$request->psw.' salah');
        }*/

        return response()->json($request->all());
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    //$credencias = $request->validate([
    //    'email' => ['required', 'email'],
    //    'password' => ['required']
    //],[
    //    'email.required' => 'O campo email é obrigatorio',
    //    'email.email' => 'O email não é valido',
    //    'password.required' => 'O campo senha é obrigatorio'
    //]);


    public function auth(Request $request)
    {
       
        $credencias = [
            'email' => $request->email,
            'password' => $request->password,
            
        ];

        if(Auth::attempt($credencias))
        {
            return redirect('/');
        }else{
            
            return redirect('/login')->with('erro', 'Email ou Senha inválida');
        }
    }
 
    public function formRegister()
    {
        return view('login.register');
    }

    public function create(Request $request)
    {
        //dd($request);

            
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            return redirect ('/')->with('sucesso','Usuario cadastrado');
    }

    public function logout(Request $request)
    {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }

}

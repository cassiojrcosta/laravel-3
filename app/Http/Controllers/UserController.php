<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    /**
     *  Mostra página de login
     */
    public function signin()
    {
        return view('signin');
    }

    /**
     *  Mostra página de registro
     */
    public function signup()
    {
        return view('signup');
    }


    /**
     *  Realiza login do usuário
     */
    public function login(Request $request)
    {
        
        $input = $request->only(
            'email',
            'password'
        );

        if (auth()->attempt($input)) {
            $request->session()->regenerate();
            return redirect('/products');
        }

        return back()->witherror('Login incorreto');
    }

    /**
     * Criar usuário
     */

     public function store(Request $request)
     {
         $input = $request->only(
             'name',
             'email',
             'password'
         );
         $input['password'] = bcrypt($input['password']);

         User::create($input);

         return redirect('/')->withSuccess("Usuário criado");

     }
}

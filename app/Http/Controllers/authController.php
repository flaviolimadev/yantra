<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;



class authController extends Controller
{
    //
    public function index(){
        
        return view('casino.register');
    }

    public function register(Request $r){


        $validacao = Validator::make($r->only('name', 'user', 'email', 'day', 'month', 'year', 'code_pais', 'ddd', 'phone', 'password'),[
            'name' => 'required|max:255',
            'user' => 'required|unique:users|max:10',
            'email' => 'required|email|unique:users|max:255',
            'day' => 'required|max:2',
            'month' => 'required|max:2',
            'year' => 'required|max:4',
            'country' => 'max:50',
            'ddd' => 'required|max:5',
            'telephone' => 'unique:users|max:2',
            'password' => 'required|min:8'
        ]);

        if ($validacao->fails()) {
            return redirect(route('register'))
                        ->withErrors($validacao)
                        ->withInput();
        }else{

            $registro = new User;

            $new_password = Hash::make($r->password);

            $registro->name = $r->name;
            $registro->user = $r->user;
            $registro->email = $r->email;
            $registro->birth_date = $r->day.'-'.$r->month.'-'.$r->year;
            $registro->telephone = intval($r->country.$r->ddd.$r->phone);
            $registro->password = $new_password;

            $registro->save();

        }


        $mail = new RegisterMail;
        Mail::to($r->email)->send($mail);

        

        return redirect('casino');
    }


    public function login(Request $r){

        //dd($r);

        $validacao = $r->validate( [
            'user' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        if( Auth::attempt($validacao)){

            return redirect()->route('casino');

        }else{

            return redirect()->route('casino', ['error_login' => 1])->withInput();
        }

    }

    public function logout(Request $r){

        Auth::logout();
        return redirect()->route('casino');

    }


    public function view(Request $r){

        dd(Auth::user());

    }
}

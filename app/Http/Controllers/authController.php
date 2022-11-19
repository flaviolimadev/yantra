<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Affiliate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Comtele\Services\TextMessageService;
use Comtele\Services\ContextMessageService;



class authController extends Controller
{
    //
    public function index(){

        return view('casino.register', ['sponsor' => 10]);
    }

    //
    public function affiliate($user){
        //Cods::where('code', $meu_bau->num_01)->get();
        $patrocnador = User::where('user', $user)->get();

        if(sizeof($patrocnador) > 0){

            return view('casino.register', ['sponsor' => $patrocnador[0]['id']]); 

        }else{

            return view('casino.register', ['sponsor' => 10]);
        }

        
    }

    public function register(Request $r){


        $validacao = Validator::make($r->only('name', 'user', 'email', 'day', 'month', 'year', 'code_pais', 'ddd', 'telephone', 'password','sponsor'),[
            'name' => 'required|max:255',
            'user' => 'required|unique:users|max:20',
            'email' => 'required|email|unique:users|max:255',
            'day' => 'required|max:2',
            'month' => 'required|max:2',
            'year' => 'required|max:4',
            'country' => 'max:50',
            'ddd' => 'required|max:5',
            'telephone' => 'unique:users|max:15',
            'password' => 'required|min:8'
        ]);

        if ($validacao->fails()) {
            return redirect(route('register'))
                        ->withErrors($validacao)
                        ->withInput();
        }else{

            //Criando um novo usuário;
            $registro = new User;
            $new_password = Hash::make($r->password);

            $registro->name = $r->name;
            $registro->user = $r->user;
            $registro->email = $r->email;
            $registro->birth_date = $r->day.'-'.$r->month.'-'.$r->year;
            $registro->telephone = intval($r->telephone);
            $registro->password = $new_password;
            $registro->save();
            
            //Adcionando na lista de affiliados;
            $affiliate = new Affiliate;
            $affiliate->user_id = $r->sponsor;
            $affiliate->affiliate_id = $registro->id;
            $affiliate->save();
        

        }


        //Enviando Email para o usuário;
        $mailData = [
            "nome" => $r->name,
            "user" => $r->user
        ];

        Mail::to($r->email)->send(new RegisterMail($mailData));

        //Enviando SMS para o usuário;
        $API_KEY = "b71f3225-f2e9-4af7-80cd-5fd36e0b4462";

        $textMessageServices = new TextMessageService($API_KEY);
        $result = $textMessageServices->send("Yantra", "Parabéns {$r->user}, Seja-bem vindo a Yantra Casino, faça agora seu depósito e venha lucrar https://yantracasino.com", [$r->telephone]);

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

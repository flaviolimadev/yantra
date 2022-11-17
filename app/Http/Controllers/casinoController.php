<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Comtele\Services\TextMessageService;
use Comtele\Services\ContextMessageService;

class casinoController extends Controller
{
    //
    public function index(Request $r){

        return redirect('casino');

    }

    public function casino(Request $r){

        $AuthUser = Auth::User();
        $error_login = isset($r->error_login) ? true : false;
        
        return view('casino.casino', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }

    public function live(Request $r){

        $AuthUser = Auth::User();
        $error_login = isset($r->error_login) ? true : false;
        
        return view('casino.casino-live', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }

    public function games(Request $r){

        $AuthUser = Auth::User();
        $error_login = isset($r->error_login) ? true : false;
        
        return view('casino.games', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }

    public function yantra(Request $r){

        return view('yantra.buy-token');

    }

    public function phone($id){

        $API_KEY = "b71f3225-f2e9-4af7-80cd-5fd36e0b4462";

        /*
        $textMessageServices = new TextMessageService($API_KEY);
        $result = $textMessageServices->send("Yantra", "Você esta recebendo a mesnagem da Yantra", ["84998443475"]);
        */

        $contextMessageService = new ContextMessageService($API_KEY);
        $result = $contextMessageService->get_report("2022-10-16 00:00", "2022-11-16 00:00", "", "");


        return $result;

    }
}
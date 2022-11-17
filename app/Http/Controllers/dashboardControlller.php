<?php

namespace App\Http\Controllers;

use App\Models\Chest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardControlller extends Controller
{
    //
    public function home(Request $r){

        $AuthUser = Auth::User(); 
        $error_login = isset($r->error_login) ? true : false;
        
        return view('dashboard.home', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }


    public function wallet(Request $r){

        $AuthUser = Auth::User();
        $extracts = User::find($AuthUser->id)->extracts;
        $error_login = isset($r->error_login) ? true : false;
        
        return view('dashboard.carteira', ['AuthUser' => $AuthUser, 'error_login' => $error_login, 'extracts' => $extracts]);

    }


    public function deposit(Request $r){

        $AuthUser = Auth::User(); 
        $error_login = isset($r->error_login) ? true : false;
        
        return view('dashboard.deposito', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }

    public function withdraw(Request $r){

        $AuthUser = Auth::User(); 
        $error_login = isset($r->error_login) ? true : false;
        
        return view('dashboard.saque', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }

    public function bonus(Request $r){

        $AuthUser = Auth::User(); 
        $error_login = isset($r->error_login) ? true : false;
        
        return view('dashboard.bonus', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }

    public function bets(Request $r){

        $AuthUser = Auth::User(); 
        $error_login = isset($r->error_login) ? true : false;

        $chests_abertos = User::find($AuthUser->id)->chests->where('status', 1);
        $chests_fechados = User::find($AuthUser->id)->chests->where('status', 0);
        
        return view('dashboard.apostas', [
            'AuthUser' => $AuthUser,
            'error_login' => $error_login,
            'chests_abertos' => $chests_abertos,
            'chests_fechados' => $chests_fechados
            ]);

    }

    public function notifications(Request $r){

        $AuthUser = Auth::User(); 
        $error_login = isset($r->error_login) ? true : false;
        
        return view('dashboard.notificacoes', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }

    public function faq(Request $r){

        $AuthUser = Auth::User(); 
        $error_login = isset($r->error_login) ? true : false;
        
        return view('dashboard.faq', ['AuthUser' => $AuthUser, 'error_login' => $error_login]);

    }
}

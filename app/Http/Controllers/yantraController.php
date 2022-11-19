<?php

namespace App\Http\Controllers;

use App\Mail\BonusRecevMail;
use App\Mail\buyChestMail;
use App\Mail\sellChestMail;
use App\Models\Affiliate;
use App\Models\Chest;
use App\Models\Chests_sys;
use App\Models\Cods;
use App\Models\Extract;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Mockery\CountValidator\Exact;

class yantraController extends Controller
{
    //========================================================================================
    public function yantra(){

        $AuthUser = Auth::User();
        $cods = User::find($AuthUser->id)->cods;

        $chests_abertos = User::find($AuthUser->id)->chests->where('status', 1);
        $chests_fechados = User::find($AuthUser->id)->chests->where('status', 0);

        return view('game-yantra.buy-chest', [
            'chests_abertos' => $chests_abertos,
            'chests_fechados' => $chests_fechados,
            'saldo' => $AuthUser->balance,
            'ganhos' => 0,
            'cods' => $cods
        ]);

    }
 

    //========================================================================================
    public function chest($id){

        $AuthUser = Auth::User();
        $Chests = Chest::find($id);
        $status_venda = [
            'num_01' => $Chests->atv_num_01 == 1 ? 'checked' : '',
            'num_02' => $Chests->atv_num_02 == 1 ? 'checked' : '',
            'num_03' => $Chests->atv_num_03 == 1 ? 'checked' : '',
            'num_04' => $Chests->atv_num_04 == 1 ? 'checked' : ''
        ];

        $num_01_usado = Cods::where('code', $Chests->num_01)->get();
        $num_02_usado = Cods::where('code', $Chests->num_02)->get();
        $num_03_usado = Cods::where('code', $Chests->num_03)->get();
        $num_04_usado = Cods::where('code', $Chests->num_04)->get();

        $num_01_usado = sizeof($num_01_usado) > 0 ? $num_01_usado[0]['status']: 0;
        $num_02_usado = sizeof($num_02_usado) > 0 ? $num_02_usado[0]['status']: 0;
        $num_03_usado = sizeof($num_03_usado) > 0 ? $num_03_usado[0]['status']: 0;
        $num_04_usado = sizeof($num_04_usado) > 0 ? $num_04_usado[0]['status']: 0;

        if($Chests->num_01 == 0){
            $num_01 = '****';
        }elseif($Chests->num_01 == 999) {
            $num_01 = 'Vendido';
        }else{
            $num_01 = $Chests->num_01;
        }

        if($Chests->num_02 == 0){
            $num_02 = '****';
        }elseif($Chests->num_02 == 999) {
            $num_02 = 'Vendido';
        }else{
            $num_02 = $Chests->num_02;
        }

        if($Chests->num_03 == 0){
            $num_03 = '****';
        }elseif($Chests->num_03 == 999) {
            $num_03 = 'Vendido';
        }else{
            $num_03 = $Chests->num_03;
        }

        if($Chests->num_04 == 0){
            $num_04 = '****';
        }elseif($Chests->num_04 == 999) {
            $num_04 = 'Vendido';
        }else{
            $num_04 = $Chests->num_04;
        }

        $nums = [
            'num_01' => ['num' => $num_01, 'status' => $num_01_usado],
            'num_02' => ['num' => $num_02, 'status' => $num_02_usado],
            'num_03' => ['num' => $num_03, 'status' => $num_03_usado],
            'num_04' => ['num' => $num_04, 'status' => $num_04_usado]
        ];


        return view('game-yantra.chest', [
            'status_venda' => $status_venda,
            'AuthUser' => $AuthUser,
            'Chests' => $Chests,
            'nums' => $nums,
            'saldo' => $AuthUser->balance,
            'ganhos' => 0
        ]);

    }


    //========================================================================================'*************'
    public function roulette($id){

        $AuthUser = Auth::User();
        $Chests = Chest::find($id);

        $num_01_usado = Cods::where('code', $Chests->num_01)->get();
        $num_02_usado = Cods::where('code', $Chests->num_02)->get();
        $num_03_usado = Cods::where('code', $Chests->num_03)->get();
        $num_04_usado = Cods::where('code', $Chests->num_04)->get();

        $num_01_usado = sizeof($num_01_usado) > 0 ? $num_01_usado[0]['status']: 0;
        $num_02_usado = sizeof($num_02_usado) > 0 ? $num_02_usado[0]['status']: 0;
        $num_03_usado = sizeof($num_03_usado) > 0 ? $num_03_usado[0]['status']: 0;
        $num_04_usado = sizeof($num_04_usado) > 0 ? $num_04_usado[0]['status']: 0;

        if($Chests->num_01 == 0){
            $num_01 = '****';
        }elseif($Chests->num_01 == 999) {
            $num_01 = 'Vendido';
        }else{
            $num_01 = $Chests->num_01;
        }

        if($Chests->num_02 == 0){
            $num_02 = '****';
        }elseif($Chests->num_02 == 999) {
            $num_02 = 'Vendido';
        }else{
            $num_02 = $Chests->num_02;
        }

        if($Chests->num_03 == 0){
            $num_03 = '****';
        }elseif($Chests->num_03 == 999) {
            $num_03 = 'Vendido';
        }else{
            $num_03 = $Chests->num_03;
        }

        if($Chests->num_04 == 0){
            $num_04 = '****';
        }elseif($Chests->num_04 == 999) {
            $num_04 = 'Vendido';
        }else{
            $num_04 = $Chests->num_04;
        }

        $nums = [
            'num_01' => ['num' => $num_01, 'status' => $num_01_usado],
            'num_02' => ['num' => $num_02, 'status' => $num_02_usado],
            'num_03' => ['num' => $num_03, 'status' => $num_03_usado],
            'num_04' => ['num' => $num_04, 'status' => $num_04_usado]
        ];


        return view('game-yantra.roulette', [
            'AuthUser' => $AuthUser,
            'Chests' => $Chests,
            'nums' => $nums,
            'saldo' => $AuthUser->balance,
            'ganhos' => 0
        ]);

    }

    //========================================================================================
    public function award(Request $r, $id, $premio){

        $id_bau = Chest::find($id);
        $AuthUser = Auth::User();

        return view('game-yantra.award' , [
            'id' => $id,
            'valor' => 2,
            'saldo' => $AuthUser->balance,
            'ganhos' => 0
        ]);

    }

    //========================================================================================
    public function buy(Request $r){

        $id = $r->id;

        $AuthUser = Auth::User();

        $Chests = Chests_sys::find($id);
        $dataUser = User::find($AuthUser->id);

        $chests_abertos = User::find($AuthUser->id)->chests->where('status', 1);
        $chests_fechados = User::find($AuthUser->id)->chests->where('status', 0);

        if($Chests->status){

            if($AuthUser->balance >= $Chests->precing && $AuthUser->id != 10){

                //Pegando o seu patrocinador
                $patrocinador = Affiliate::where('affiliate_id', $AuthUser->id)->get();

                //Adicionando bonus de indicação direta;
                $vez = User::find($patrocinador[0]['user_id']);
                $vez->bonus += $Chests->direct;
                $vez->save();

                //Adicionando bonus de Rede;
                $vez = User::find($patrocinador[0]['user_id']);
                $vez->bonus += $Chests->network;
                $vez->save();

                //Crianto o extrato financeiro no sistema;
                $new_extract = new Extract;
                $new_extract->user_id = $patrocinador[0]['user_id'];
                $new_extract->status = 1;
                $new_extract->about = 'Comição direta de Báu - '.$AuthUser->user;
                $new_extract->value =  $Chests->direct;
                $new_extract->ref =  $AuthUser->id;;
                $new_extract->save();

                //Crianto o extrato financeiro no sistema;
                $new_extract = new Extract;
                $new_extract->user_id = $patrocinador[0]['user_id'];
                $new_extract->status = 1;
                $new_extract->about = 'Comição indireta de Báu - '.$AuthUser->user;
                $new_extract->value =  $Chests->network;
                $new_extract->ref =  $AuthUser->id;
                $new_extract->save();

                //Pecorrendo os 10 Niveis da Rede
                for($i = 0; $i <= 9; $i++){

                    if($patrocinador[0]['user_id'] == 10){break;}

                    //echo "Nível ({$i}) :" . $patrocinador[0]['user_id'].'<br>';
                    $patrocinador = Affiliate::where('affiliate_id', $patrocinador[0]['user_id'])->get();

                    if(sizeof($patrocinador) > 0){ 
                        
                        //Adicionando bonus de Rede;
                        $vez = User::find($patrocinador[0]['user_id']);
                        $vez->bonus += $Chests->network;
                        $vez->save();

                        //Crianto o extrato financeiro no sistema;
                        $new_extract = new Extract;
                        $new_extract->user_id = $patrocinador[0]['user_id'];
                        $new_extract->status = 1;
                        $new_extract->about = 'Comição indireta de Báu - '.$AuthUser->user;
                        $new_extract->value =  $Chests->network;
                        $new_extract->ref =  $AuthUser->id;;
                        $new_extract->save();

                    }else{break;}
                    
                }



                $buscar_doador = true;
                //Procurando doador para receber o valor;
                //Pegando o patrocinador;
                $patrocinador = Affiliate::where('affiliate_id', $AuthUser->id)->get();

                while($buscar_doador){

                    if($patrocinador[0]['user_id'] == 10){ 

                        //Atualizando Saldo de quem ta recebendo a doação
                        $atualizar_saldo_patrocinador = User::find(10);
                        $atualizar_saldo_patrocinador->balance += ($Chests->return / 4);
                        $atualizar_saldo_patrocinador->save();

                        //Crianto o extrato financeiro no sistema;
                        $new_extract = new Extract;
                        $new_extract->user_id = 10;
                        $new_extract->status = 1;
                        $new_extract->about = 'Venda de Código - '.$AuthUser->user;
                        $new_extract->value =  ($Chests->return / 4);
                        $new_extract->ref =  $AuthUser->id;
                        $new_extract->save();


                        break; 
                    }

                    if(sizeof($patrocinador) > 0){ 

                        $check_doador = Chest::where('user_id', $patrocinador[0]['user_id'])->where('status', 1)->get();

                        if(sizeof($check_doador) > 0){

                            foreach($check_doador as $baus){


                                if($baus->num_01 == 0 && $baus->atv_num_01 == 1){

                                    //Atualizando Bau de quem ta recebendo a doação
                                    $atualizar_bau = chest::find($baus->id);
                                    $atualizar_bau->num_01 = 999;
                                    $atualizar_bau->atv_num_01 = 0;
                                    $atualizar_bau->save();

                                    //Atualizando Saldo de quem ta recebendo a doação
                                    $atualizar_saldo_patrocinador = User::find($patrocinador[0]['user_id']);
                                    $atualizar_saldo_patrocinador->balance += ($Chests->return / 4);
                                    $atualizar_saldo_patrocinador->save();

                                    //Crianto o extrato financeiro no sistema;
                                    $new_extract = new Extract;
                                    $new_extract->user_id = $patrocinador[0]['user_id'];
                                    $new_extract->status = 1;
                                    $new_extract->about = 'Venda de Código - '.$AuthUser->user;
                                    $new_extract->value =  ($Chests->return / 4);
                                    $new_extract->ref =  $AuthUser->id;
                                    $new_extract->save();

                                    //Enviando Email de venda de código;
                                    $recebor_da_venda = User::find($patrocinador[0]['user_id']);

                                    $mailData = [
                                        "nome" => $recebor_da_venda->nome,
                                        "user" => $recebor_da_venda->user
                                    ];

                                    Mail::to($AuthUser->email)->send( new sellChestMail( $mailData) );

                                    $buscar_doador = false;
                                    break;
                                }


                                if($baus->num_02 == 0 && $baus->atv_num_02 == 1){

                                    //Atualizando Bau de quem ta recebendo a doação
                                    $atualizar_bau = chest::find($baus->id);
                                    $atualizar_bau->num_01 = 999;
                                    $atualizar_bau->atv_num_01 = 0;
                                    $atualizar_bau->save();

                                    //Atualizando Saldo de quem ta recebendo a doação
                                    $atualizar_saldo_patrocinador = User::find($patrocinador[0]['user_id']);
                                    $atualizar_saldo_patrocinador->balance += ($Chests->return / 4);
                                    $atualizar_saldo_patrocinador->save();

                                    //Crianto o extrato financeiro no sistema;
                                    $new_extract = new Extract;
                                    $new_extract->user_id = $patrocinador[0]['user_id'];
                                    $new_extract->status = 1;
                                    $new_extract->about = 'Venda de Código - '.$AuthUser->user;
                                    $new_extract->value =  ($Chests->return / 4);
                                    $new_extract->ref =  $AuthUser->id;
                                    $new_extract->save();

                                    $buscar_doador = false;
                                    break;
                                }


                                if($baus->num_03 == 0 && $baus->atv_num_03 == 1){

                                    //Atualizando Bau de quem ta recebendo a doação
                                    $atualizar_bau = chest::find($baus->id);
                                    $atualizar_bau->num_01 = 999;
                                    $atualizar_bau->atv_num_01 = 0;
                                    $atualizar_bau->save();

                                    //Atualizando Saldo de quem ta recebendo a doação
                                    $atualizar_saldo_patrocinador = User::find($patrocinador[0]['user_id']);
                                    $atualizar_saldo_patrocinador->balance += ($Chests->return / 4);
                                    $atualizar_saldo_patrocinador->save();

                                    //Crianto o extrato financeiro no sistema;
                                    $new_extract = new Extract;
                                    $new_extract->user_id = $patrocinador[0]['user_id'];
                                    $new_extract->status = 1;
                                    $new_extract->about = 'Venda de Código - '.$AuthUser->user;
                                    $new_extract->value =  ($Chests->return / 4);
                                    $new_extract->ref =  $AuthUser->id;
                                    $new_extract->save();

                                    $buscar_doador = false;
                                    break;
                                }


                                if($baus->num_04 == 0 && $baus->atv_num_04 == 1){

                                    //Atualizando Bau de quem ta recebendo a doação
                                    $atualizar_bau = chest::find($baus->id);
                                    $atualizar_bau->num_01 = 999;
                                    $atualizar_bau->atv_num_01 = 0;
                                    $atualizar_bau->save();

                                    //Atualizando Saldo de quem ta recebendo a doação
                                    $atualizar_saldo_patrocinador = User::find($patrocinador[0]['user_id']);
                                    $atualizar_saldo_patrocinador->balance += ($Chests->return / 4);
                                    $atualizar_saldo_patrocinador->save();

                                    //Crianto o extrato financeiro no sistema;
                                    $new_extract = new Extract;
                                    $new_extract->user_id = $patrocinador[0]['user_id'];
                                    $new_extract->status = 1;
                                    $new_extract->about = 'Venda de Código - '.$AuthUser->user;
                                    $new_extract->value =  ($Chests->return / 4);
                                    $new_extract->ref =  $AuthUser->id;
                                    $new_extract->save();

                                    $buscar_doador = false;
                                    break;
                                }

                                
                            }
                            
                        }

                    

                    }
                    
                    
                    $patrocinador = Affiliate::where('affiliate_id', $patrocinador[0]['user_id'])->get();  

                    
                }


                //Criando uma nova mandala no sistema;
                $new_chest = new Chest;
                $new_chest->user_id = $AuthUser->id;
                $new_chest->chest = $Chests->precing;
                $new_chest->status = 1;
                $new_chest->save();

                //Atualizando Balanco do usuario após a compra;
                $dataUser->balance = $AuthUser->balance - $Chests->precing;
                $dataUser->save();

                //Crianto o extrato financeiro no sistema;
                $new_extract = new Extract;
                $new_extract->user_id = $AuthUser->id;
                $new_extract->status = 1;
                $new_extract->about = 'Compra do baú realizada';
                $new_extract->value =  $Chests->precing;
                $new_extract->ref =  $id;
                $new_extract->save();

                //Enviando Email de compra do báu;
                $mailData = [
                    "nome" => $AuthUser->nome,
                    "user" => $AuthUser->user
                ];

                Mail::to($AuthUser->email)->send( new buyChestMail( $mailData) );


            }else{

                //Crianto o extrato financeiro no sistema;
                $new_extract = new Extract;
                $new_extract->user_id = $AuthUser->id;
                $new_extract->status = 0;
                $new_extract->about = 'Compra do baú não relizada - Saldo Insuficiente';
                $new_extract->value =  $Chests->precing;
                $new_extract->ref =  $id;
                $new_extract->save();

                return "400";
            }
            
        }else{

            //Crianto o extrato financeiro no sistema;
            $new_extract = new Extract;
            $new_extract->user_id = $AuthUser->id;
            $new_extract->status = 0;
            $new_extract->about = 'Compra do baú não relizada - Indispoível';
            $new_extract->value =  $Chests->precing;
            $new_extract->ref =  $id;
            $new_extract->save();

            return "404";

        }


        return "200";

        

    }

    //========================================================================================
    public function buyOrSell(Request $r){

        $id = $r->id;
        $num = $r->num;

        $chests = Chest::find($id);

        if($num == '01' && $chests->num_01 == 0){

            if($chests->atv_num_01){

                $chests->atv_num_01 = 0;
                $chests->save();

            }else{
                $chests->atv_num_01 = 1;
                $chests->save();
            }


        }elseif($num == '02' && $chests->num_02 == 0){

            if($chests->atv_num_02){

                $chests->atv_num_02 = 0;
                $chests->save();

            }else{
                $chests->atv_num_02 = 1;
                $chests->save();
            }

        }elseif($num == '03' && $chests->num_03 == 0){

            if($chests->atv_num_03){

                $chests->atv_num_03 = 0;
                $chests->save();

            }else{
                $chests->atv_num_03 = 1;
                $chests->save();
            }

        }elseif($num == '04'){

            if($chests->atv_num_04 && $chests->num_04 == 0){

                $chests->atv_num_04 = 0;
                $chests->save();

            }else{
                $chests->atv_num_04 = 1;
                $chests->save();
            }
            
        }
        
        return redirect( route('yantra.chest', ['id' => $id]) );
    }

    //========================================================================================
    public function scrape(Request $r){

        $id = $r->id;
        $num = $r->num;
        $AuthUser = Auth::User();
        $code = Carbon::now()->timestamp;
        $chest = Chest::find($id);

        if($num == '01' && $chest->num_01 == 0){

            $chest->num_01 = $code;
            $chest->atv_num_01 = 0;
            $chest->save();


            $add_code = new Cods;
            $add_code->user_id = $AuthUser->id;
            $add_code->chests_id = $id;
            $add_code->code = $code;
            $add_code->save();


        }elseif($num == '02' && $chest->num_02 == 0){

            $chest->num_02 = $code;
            $chest->atv_num_02 = 0;
            $chest->save();

            $add_code = new Cods;
            $add_code->user_id = $AuthUser->id;
            $add_code->chests_id = $id;
            $add_code->code = $code;
            $add_code->save();

        }elseif($num == '03' && $chest->num_03 == 0){

            $chest->num_03 = $code;
            $chest->atv_num_03 = 0;
            $chest->save();

            $add_code = new Cods;
            $add_code->user_id = $AuthUser->id;
            $add_code->chests_id = $id;
            $add_code->code = $code;
            $add_code->save();

        }elseif($num == '04' && $chest->num_04 == 0){

            $chest->num_04 = $code;
            $chest->atv_num_04 = 0;
            $chest->save();

            $add_code = new Cods;
            $add_code->user_id = $AuthUser->id;
            $add_code->chests_id = $id;
            $add_code->code = $code;
            $add_code->save();
            
        }

        return redirect( route('yantra.chest', ['id' => $id]) );

    }


    //========================================================================================
    public function checkCode(Request $r){

        $code = Cods::where('code', $r->code)->where('status', 0)->get();
        return isset($code[0]['bonus']) ? 200 : 400;

    }

    //========================================================================================
    public function awardCode(Request $r){

        $AuthUser = Auth::User();
        $code = Cods::where('code', $r->code)->where('status', 0)->get();

        $meu_bau = Chest::find($code[0]['chests_id']);

        if( isset($code[0]['bonus']) ){

            //Atualizado codigo para usado;
            $update_code = Cods::find($code[0]['id']);
            $update_code->status = 1;
            $update_code->save();

            //Atualizando Saldo do usuario;
            $update_user = User::find($AuthUser->id);
            $update_user->balance += $code[0]['bonus'];
            $update_user->save();

            //Crianto o extrato financeiro no sistema;
            $new_extract = new Extract;
            $new_extract->user_id = $AuthUser->id;
            $new_extract->status = 1;
            $new_extract->about = 'Prêmio da Roleta Yantra';
            $new_extract->value =  $code[0]['bonus'];
            $new_extract->ref =  $code[0]['id'];;
            $new_extract->save();

            
            $cod_01 = Cods::where('code', $meu_bau->num_01)->get();
            $cod_02 = Cods::where('code', $meu_bau->num_02)->get();
            $cod_03 = Cods::where('code', $meu_bau->num_03)->get();
            $cod_04 = Cods::where('code', $meu_bau->num_04)->get();

            if( isset($cod_01[0]['status']) && isset($cod_02[0]['status']) && isset($cod_03[0]['status']) && isset($cod_04[0]['status']) ){
            
                if( $cod_01[0]['status'] > 0 &&
                    $cod_02[0]['status'] > 0 &&
                    $cod_03[0]['status'] > 0 &&
                    $cod_04[0]['status'] > 0){
                    
                    //Resetando Bau
                    $meu_bau->status = 0;
                    $meu_bau->save();

                }

            }

            //Enviando Email do premio ganho na roleta;
            $mailData = [
                "nome" => $AuthUser->nome,
                "user" => $AuthUser->user,
                "premio" => ($code[0]['bonus'] * 100)
            ];

            Mail::to($AuthUser->email)->send( new BonusRecevMail( $mailData) );



            return redirect( route('yantra.award', ['id' => $code[0]['chests_id'], 'premio' => $code[0]['bonus']]) );

        }

    }

    public function recommendation(){

        return view('game-yantra.indicacao');

    }

    public function revshare(){

        return view('game-yantra.revshare');

    }

    public function career(){

        return view('game-yantra.carreira');

    }
    
    //========================================================================================
    public function add_chests(){

        $new_chest = new Chests_sys;
        $new_chest->precing = 84000;
        $new_chest->status = 0;
        $new_chest->return = 224000;
        $new_chest->save();

    }
}

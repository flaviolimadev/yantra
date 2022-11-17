<?php

namespace App\Http\Controllers;

use App\Models\Chest;
use App\Models\Chests_sys;
use App\Models\Cods;
use App\Models\Extract;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $nums = [
            'num_01' => $Chests->num_01 == 0 ? '****' : $Chests->num_01,
            'num_02' => $Chests->num_02 == 0 ? '****' : $Chests->num_02,
            'num_03' => $Chests->num_03 == 0 ? '****' : $Chests->num_03,
            'num_04' => $Chests->num_04 == 0 ? '****' : $Chests->num_04
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


    //========================================================================================
    public function roulette($id){

        $AuthUser = Auth::User();
        $Chests = Chest::find($id);

        $nums = [
            'num_01' => $Chests->num_01 == 0 ? '*************' : $Chests->num_01,
            'num_02' => $Chests->num_02 == 0 ? '*************' : $Chests->num_02,
            'num_03' => $Chests->num_03 == 0 ? '*************' : $Chests->num_03,
            'num_04' => $Chests->num_04 == 0 ? '*************' : $Chests->num_04
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
    public function buy($id){

        $AuthUser = Auth::User();

        $Chests = Chests_sys::find($id);
        $dataUser = User::find($AuthUser->id);

        $chests_abertos = User::find($AuthUser->id)->chests->where('status', 1);
        $chests_fechados = User::find($AuthUser->id)->chests->where('status', 0);

        if($Chests->status){

            if($AuthUser->balance >= $Chests->precing){

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

            }else{

                //Crianto o extrato financeiro no sistema;
                $new_extract = new Extract;
                $new_extract->user_id = $AuthUser->id;
                $new_extract->status = 0;
                $new_extract->about = 'Compra do baú não relizada - Saldo Insuficiente';
                $new_extract->value =  $Chests->precing;
                $new_extract->ref =  $id;
                $new_extract->save();
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

        }


        return redirect(route('wallet'));

        

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



            return redirect( route('yantra.award', ['id' => $code[0]['chests_id'], 'premio' => $code[0]['bonus']]) );

        }

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

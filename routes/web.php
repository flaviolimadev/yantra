<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\casinoController;
use App\Http\Controllers\dashboardControlller;
use App\Http\Controllers\yantraController;
use Illuminate\Support\Facades\Route;



/*
| Rotas acessiveis apenas para usarios que esteja, logados na aplicação;
| Games dos casino;
| Dasboard
*/
Route::middleware(['auth'])->group(function() {

    Route::get('/board/home', [dashboardControlller::class, 'home'])->name('home');
    Route::get('/board/wallet', [dashboardControlller::class, 'wallet'])->name('wallet');
    Route::get('/board/deposit', [dashboardControlller::class, 'deposit'])->name('deposit');
    Route::get('/board/withdraw', [dashboardControlller::class, 'withdraw'])->name('withdraw');
    Route::get('/board/bonus', [dashboardControlller::class, 'bonus'])->name('bonus');
    Route::get('/board/bets', [dashboardControlller::class, 'bets'])->name('bets');
    Route::get('/board/notifications', [dashboardControlller::class, 'notifications'])->name('notifications');
    Route::get('/board/faq', [dashboardControlller::class, 'faq'])->name('faq');

    Route::get('/casino/yantra', [yantraController::class, 'yantra'])->name('yantra');
    Route::get('/casino/yantra/chest/{id}', [yantraController::class, 'chest'])->name('yantra.chest');
    Route::get('/casino/yantra/roulette/{id}', [yantraController::class, 'roulette'])->name('yantra.roulette');
    Route::get('/casino/yantra/award/{id}/{premio}', [yantraController::class, 'award'])->name('yantra.award');

    Route::get('/casino/yantra/add', [yantraController::class, 'add_chests'])->name('yantra.awardAdd');



    Route::get('/casino/yantra/buy/{id}', [yantraController::class, 'buy'])->name('yantra.buy');
    Route::post('/casino/yantra/buy-or-sell/', [yantraController::class, 'buyOrSell'])->name('yantra.buyOrSell');
    Route::get('/casino/yantra/scrape/', [yantraController::class, 'scrape'])->name('yantra.scrape');
    Route::post('/casino/yantra/check-code/', [yantraController::class, 'checkCode'])->name('yantra.checkCode');
    Route::get('/casino/yantra/award-code/', [yantraController::class, 'awardCode'])->name('yantra.awardCode');

    
});
/*
| *************************************************************
*/


/*
| Rotas acessiveis para usarios que nao estejam autenticados
| Casino;
*/
Route::get('/', [casinoController::class, 'index']);
Route::get('/casino', [casinoController::class, 'casino'])->name('casino');
Route::get('/casino/live', [casinoController::class, 'live'])->name('casino.live');
Route::get('/casino/games', [casinoController::class, 'games'])->name('casino.games');

Route::get('/casino/sms/{phone}', [casinoController::class, 'phone']);

/*
| *************************************************************
*/

/*
| Rotas para controlar as validações e registros da plataforma;
| Login;
| Registro;
| Logout da aplicação;
*/
Route::get('/auth/register', [authController::class, 'index'])->name('register');
Route::get('/auth/login', [authController::class, 'view'])->name('login');
Route::get('/auth/logout', [authController::class, 'logout'])->name('logout');
Route::post('/auth/login', [authController::class, 'login'])->name('login');
Route::post('/auth/register', [authController::class, 'register'])->name('register');
/*
| *************************************************************
*/
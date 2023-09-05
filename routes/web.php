<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return redirect(\route('login'));
});
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('submit', [AuthController::class, 'submit'])->name('submit');
Route::post('submit-register', [AuthController::class, 'submit_register'])->name('submit_register');
Route::get('/documentation',[HomeController::class,'documentation'])->name('documentation');
Route::match(array('GET', 'POST'),'/display_link/{code}',[HomeController::class,'display_link'])->name('display_link');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/merchants', [HomeController::class, 'merchants'])->name('merchants');
    Route::match(array('GET', 'POST'),'/profil', [AuthController::class, 'profil'])->name('profil');
    Route::match(array('GET', 'POST'), '/changepassword', [AuthController::class, 'changepassword'])
        ->name('changepassword');
    Route::match(array('GET', 'POST'), '/changeimage', [AuthController::class, 'changeimage'])
        ->name('changeimage');
    Route::match(array('GET', 'POST'),'/addmerchant', [HomeController::class, 'addmerchant'])->name('addmerchant');
    Route::get('/balances', [HomeController::class, 'balances'])->name('balances');
    Route::get('/change_merchant/{id}', [HomeController::class, 'changeMerchant'])->name('changeMerchant');
    Route::get('/transferts', [TransactionController::class, 'transferts'])->name('transferts');
    Route::match(array('GET', 'POST'),'/add-transfert-step2', [TransactionController::class, 'addtransfertstep2'])->name('addtransfertstep2');
    Route::match(array('GET', 'POST'),'/add-transfert-step3', [TransactionController::class, 'addtransfertstep3'])->name('addtransfertstep3');
    Route::match(array('GET', 'POST'),'/add-transfert', [TransactionController::class, 'addtransfert'])->name('addtransfert');

    Route::match(array('GET', 'POST'),'/add-bank-transfert-step2', [TransactionController::class, 'addbanktransfertstep2'])->name('addbanktransfertstep2');
    Route::match(array('GET', 'POST'),'/add-bank-transfert-step3', [TransactionController::class, 'addbanktransfertstep3'])->name('addbanktransfertstep3');
    Route::match(array('GET', 'POST'),'/add-bank-transfert', [TransactionController::class, 'addbanktransfert'])->name('addbanktransfert');

    Route::get('/payements', [TransactionController::class, 'payments'])->name('payements');
    Route::match(array('GET', 'POST'),'/payement-link', [TransactionController::class, 'paymentlinks'])->name('paymentlinks');
});
Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::match(array('GET', 'POST'),'/alltransferts', [TransactionController::class, 'alltransferts'])->name('alltransferts');
    Route::match(array('GET', 'POST'),'/customers', [SettingController::class, 'customers'])->name('customers');
    Route::match(array('GET', 'POST'),'/zones', [SettingController::class, 'zones'])->name('zones');
    Route::match(array('GET', 'POST'),'/currencies', [SettingController::class, 'currencies'])->name('currencies');
    Route::match(array('GET', 'POST'),'/countries', [SettingController::class, 'countries'])->name('countries');
    Route::match(array('GET', 'POST'),'/operators', [SettingController::class, 'operators'])->name('operators');
    Route::match(array('GET', 'POST'),'/partenaire-api', [SettingController::class, 'partenaires'])->name('partenaires');
});

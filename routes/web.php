<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Models\Users;

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

Route::get('/', function () {
    // make a checker of auth user for ALL pages
    $id = AccountController::userAuthChecker();
    if (!empty($id)) {
        return view('index', compact('id'));
    }
    return view('index');
})->name('index');

Route::get('/user_agreement', function () {
    return view('user_agreement');
})->name('user_agreement');

Route::get('/online_conduct', function () {
    return view('online_conduct');
})->name('online_conduct');

Route::get('/rules_of_publication', function () {
    return view('rules_of_publication');
})->name('rules_of_publication');

Route::get('/community', function () {
    $list = AccountController::listAccounts();
    $id = AccountController::userAuthChecker();
    if (!empty($id)) {
        return view('community', compact('id', 'list'));
    }
    return view('community', compact('list'));
})->name('community');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/profile/{id}', function ($id) {
    $id = AccountController::userAuthChecker();
    if (!empty($id)) {
        return view('profile', compact('id'));
    } else {
        return redirect('/login');
    }
})->name('profile');

Route::get('/settings', function () {
    if (request()->cookie('USER') != null) {
        $id = AccountController::userAuthChecker();
        return view('settings', compact('id'));
    } else {
        return redirect('login');
    }
})->name('settings');

Route::post('/register', [AccountController::class, 'register']);
Route::post('/login', [AccountController::class, 'login']);
// update the user settings

Route::post('/settings', [AccountController::class, 'settings']);

Route::get('/logout', [AccountController::class, 'logout']);

// for debug
Route::get('/set-cookie', [AccountController::class, 'setCookie']);
Route::get('/get-cookie', [AccountController::class, 'getCookie']);
Route::get('/del-cookie', [AccountController::class, 'delCookie']);

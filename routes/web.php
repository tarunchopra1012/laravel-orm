<?php

use App\Models\Address;
use App\Models\User;
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

Route::get('/', function () {
    $user = User::find(1);

    // $address = $user->address()->latest()->first(); // It will give us the laravel collection of the models 
    // dd($address);

    return view('address', [
        'user' => $user
    ]);
});

Route::get('/create', function () {
    $user = User::find(1);

    $user->address()->create([
        'line_1' => '40 Park West',
        'line_2' => 'Romeo Wood',
        'city' => 'Jallandhar',
        'state' => 'Punjab',
        'zip_code' => 54321
    ]);

    /*
    Address::forceCreate([
        'user_id' => 1,
        'line_1' => '38 Park West',
        'line_2' => 'East Wood',
        'city' => 'Jallandhar',
        'state' => 'Punjab',
        'zip_code' => 54321
    ]);
    */
});

Route::get('/update', function () {
    $user = User::find(1);

    $user->address()->update([
        'line_1' => '1 Eloquent Lane'
    ]);
});

Route::get('/delete', function () {
    $user = User::find(1);

    $user->address()->delete();
});

<?php

use App\Http\Controllers\OwnersController;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

Route::get('/owners', [OwnersController::class, 'index']);

Route::get('/test-db-connection', function() {
    try {
        DB::connection()->getPdo();
        echo "Connected successfully to the database.";
    } catch (\Exception $e) {
        die("Could not connect to the database. Please check your configuration. Error: " . $e->getMessage());
    }
});


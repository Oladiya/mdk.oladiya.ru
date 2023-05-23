<?php

use App\Http\Controllers\MDK1Controller;
use App\Http\Controllers\PizzeriaController;
use App\Http\Controllers\PizzeriaOrderController;
use App\Http\Controllers\PizzeriaUserController;
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

Route::get('/', fn() => redirect(route('media.home')))->name('home');

Route::get('/mp-verstka-html/{id}', [MDK1Controller::class, 'show'])->name('mdk1');
Route::get('/mp-verstka-html', [MDK1Controller::class, 'index'])->name('mdk1.index');
Route::get('/test', fn() => view('test'));
Route::get('/just-because', fn() => view('just-because'));
Route::prefix('05-02')->name('05-02.')->group(function () {
    Route::get('/db', function () {
        $db = \App\Models\DataBase::all();
        return view('05-02-db', compact('db'));
    })->name('db');

    Route::post('/db', function (\Illuminate\Http\Request $request) {
        $validated = $request->validate([
            'fam' => 'required',
            'name' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
        ]);
        \App\Models\DataBase::create($validated);
        return redirect(route('05-02.db'));
    })->name('db.post');
});

Route::prefix('pizzeria')->name('pizzeria.')->group(function () {
    Route::get('/', [PizzeriaController::class, 'index'])->name('home');
    Route::get('/orders', [PizzeriaOrderController::class, 'index'])->name('order.index');
    Route::get('/orders/{id}', [PizzeriaOrderController::class, 'show'])->name('order.show');
    Route::post('/orders', [PizzeriaOrderController::class, 'store'])->name('order.store');
    Route::get('/users', [PizzeriaUserController::class, 'store']);
});

Route::prefix('media')->name('media.')->group(function () {
    Route::get('/', function (){
        $cur = 0;
        return view('mp-verstka-media.home', compact('cur'));
    })->name('home');
    Route::get('/about', function (){
        $cur = 1;
        return view('mp-verstka-media.about', compact('cur'));
    })->name('about');
    Route::get('/services', function (){
        $cur = 2;
        return view('mp-verstka-media.services', compact('cur'));
    })->name('services');
}
);

Route::get('/my-giro', function (){
    return view('my-giro');
});

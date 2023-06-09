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

Route::get('/', fn() => view('home'))->name('home');
Route::get('/test', fn() => view('test'));
Route::get('/just-because', fn() => view('just-because'));

Route::prefix('05-01')->name('05-01.')->group(function () {

    Route::get('/mp-verstka-html/{id}', [MDK1Controller::class, 'show'])->name('mdk1');
    Route::get('/mp-verstka-html', [MDK1Controller::class, 'index'])->name('mdk1.index');

    Route::prefix('media')->name('media.')->group(function () {
        Route::get('/', function () {
            $cur = 0;
            return view('05-01.mp-verstka-media.home', compact('cur'));
        })->name('home');
        Route::get('/about', function () {
            $cur = 1;
            return view('05-01.mp-verstka-media.about', compact('cur'));
        })->name('about');
        Route::get('/services', function () {
            $cur = 2;
            return view('05-01.mp-verstka-media.services', compact('cur'));
        })->name('services');
    });

    Route::get('/my-giro', function () {
        return view('05-01.my-giro');
    })->name('my-giro');
});

Route::prefix('05-02')->name('05-02.')->group(function () {

    Route::prefix('db')->name('db.')->group(function (){

        Route::get('/', function () {
            $db = \App\Models\DataBase::all();
            return view('05-02.db', compact('db'));
        })->name('index');

        Route::post('/', function (\Illuminate\Http\Request $request) {
            $validated = $request->validate([
                'fam' => 'required',
                'name' => 'required',
                'tel' => 'required',
                'email' => 'required|email',
            ]);
            \App\Models\DataBase::create($validated);
            return redirect(route('05-02.db.index'));
        })->name('post');
    });

    Route::get('credit-calculator', fn() => view('05-02.credit-calculator'))->name('credit-calculator');
});

<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){

    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    //salle routes
    Route::controller(App\Http\Controllers\Admin\SalleController::class)->group(function(){
        Route::get('/salle','index');
        Route::get('/salle/create','create');
        Route::post('/salle','store');
        Route::get('/salle/{salle}/edit','edit');
        Route::put('/salle/{salle}','update');
        
    });
    Route::get('statistique', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //machine routes
    // Route::get('machine', [App\Http\Controllers\Admin\MachineController::class, 'index'] );
    // Route::get('machine/create', [App\Http\Controllers\Admin\MachineController::class, 'create'] );
    // Route::post('machine', [App\Http\Controllers\Admin\MachineController::class, 'store'] );

    Route::controller(App\Http\Controllers\Admin\MachineController::class)->group(function(){
        Route::get('/machine','index');
        Route::get('/machine/create','create');
        Route::post('/machine','store');
        Route::get('/machine/{machine}/edit','edit');
        Route::put('/machine/{machine}','update');
        
    });

    // Route::get('salle', [App\Http\Controllers\Admin\SalleController::class, 'index']);
    // Route::get('salle/create', [App\Http\Controllers\Admin\SalleController::class, 'create']);
    // Route::post('salle', [App\Http\Controllers\Admin\SalleController::class, 'store']);
    // Route::get('/salle/{salle}/edit','edit');

    // admin/salle/'.$salle->id.'/edit

});



// Route::get('/salle', function(){
//     $salles = App\Models\salle::all();
//     return view('salle.index', ['salle' => $salles]);
// });

// Route::get('/machine', function(){
//     $machines = App\Models\machine::all();
//     return view('machine.index', ['machine'=> $machines]);
// });
// Route::get('/salles/create', function () {
//      return view('salles.create');
// });
// Route::get('/salles/{salle}/edit', function ($id) {
//      $salle = App\Models\salle::find($id);
//      return view('salles.edit', ['salle' => $salle]);
// });

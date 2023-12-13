<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminParticipantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\EventController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/eventos', [EventController::class, 'index'])->name('inscripcion.index');
Route::get('/eventos/{id}/create', [EventController::class, 'create'])->name('inscripcion.create');
Route::post('/eventos', [EventController::class, 'store'])->name('inscripcion.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function(){
    Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
    Route::get('/participants', [AdminParticipantController::class, 'index'])->name('participants.index');

    Route::resource('events', AdminEventController::class)
    ->name('index', 'listarEventos.eventos')
    ->name('store', 'registroEvento.evento.store')                                               
    ->name('edit', 'eventos.edit')     
    ->name('update', 'eventos.update')   
    ->name('destroy', 'eventos.destroy')->parameters([
        'events' => 'id',
    ]);
});

require __DIR__.'/auth.php';




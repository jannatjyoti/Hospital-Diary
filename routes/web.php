<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\DoctorController;

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

Route::get('/ui', function () {
    return view('welcome');
})->name('ui');

//user interface
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/service/{id}', [HomeController::class, 'service']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/doctor', [HomeController::class, 'doctor'])->name('doctors');
Route::get('/hospital', [HomeController::class, 'hospital'])->name('hospitals');
Route::get('/hospital/{id}', [HomeController::class, 'hos_details']);

//end user interface


Route::post('/admin_save', [AdminController::class, 'admin_save'])->name('auth.admin_save');
Route::post('/admin_check', [AdminController::class, 'admin_check'])->name('auth.admin_check');
Route::get('/admin_logout', [AdminController::class, 'admin_logout'])->name('auth.admin_logout');



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/admin_login', [AdminController::class, 'admin_login'])->name('auth.admin_login');
    Route::get('/admin_register', [AdminController::class, 'admin_register'])->name('auth.admin_register');

    Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.home');
    Route::get('/admin/settings',[AdminController::class,'admin_settings']);
    Route::get('/admin/profile',[AdminController::class,'admin_profile']);
    Route::get('/admin/staff',[AdminController::class,'admin_staff']);
    Route::resource('/admin/service', ServiceController::class);
    Route::resource('/admin/doctor', DoctorController::class);
    Route::get('/admin/doctor/delete/{doctor}', [DoctorController::class,'delete']);
    Route::resource('admin/service', ServiceController::class);
    Route::get('/admin/service/delete/{service}', [ServiceController::class,'delete']);
    Route::resource('/admin/serviceDetail', ServiceDetailController::class);
    Route::get('/admin/serviceDetail/delete/{serviceDetail}', [ServiceDetailController::class,'delete']);
    
    // Route::get('importExportView', [ServiceController::class, 'importExportView']);
    // Route::get('export', [ServiceController::class, 'export'])->name('export');
    Route::post('import', [ServiceController::class, 'import'])->name('import');

});

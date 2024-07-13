<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;

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
    return view('index');
});


Route::get('/register', [AuthController::class, 'Register'])->name('register');
Route::get('/login', [AuthController::class, 'Login'])->name('login');

Route::post('register_post', [AuthController::class, 'register_post']);
Route::post('login_post', [AuthController::class, 'login_post']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'Dashboard']);

    //Test
    Route::get('admin/tests', [TestController::class, 'AdminTest']);
    Route::get('/admin/tests/mark/{id}', [TestController::class, 'Edittests']);
    Route::post('/admin/tests/update/{id}', [TestController::class, 'Updatetests']);
    Route::get('/admin/tests/delete/{id}', [TestController::class, 'Deletetests']);
    Route::get('/admin/tests/fail/{id}', [TestController::class, 'Failtests']);

    //Portfolio
    Route::get('admin/portfolio', [PortfolioController::class, 'Homeportfolio']);
    Route::get('admin/portfolio/add', [PortfolioController::class, 'AdminAddportfolio']);
    Route::post('admin/portfolio/add', [PortfolioController::class, 'AdminStoreportfolio']);
    Route::get('/admin/portfolio/edit/{id}', [PortfolioController::class, 'Editportfolio']);
    Route::post('/admin/portfolio/update/{id}', [PortfolioController::class, 'Updateportfolio']);
    Route::get('/admin/portfolio/delete/{id}', [PortfolioController::class, 'Deleteportfolio']);

    //Appointments
    Route::get('admin/appointments', [PortfolioController::class, 'Homeappointments']);
    Route::get('admin/appointments/add', [PortfolioController::class, 'AdminAddappointments']);
    Route::post('admin/appointments/add', [PortfolioController::class, 'AdminStoreappointments']);
    Route::get('/admin/appointments/edit/{id}', [PortfolioController::class, 'Editappointments']);
    Route::post('/admin/appointments/update/{id}', [PortfolioController::class, 'Updateappointments']);
    Route::get('/admin/appointments/delete/{id}', [PortfolioController::class, 'Deleteappointments']);

    // users
    Route::get('admin/user', [UserController::class, 'users']);
    Route::get('admin/user/add', [UserController::class, 'add_user']);
    Route::post('admin/user/add', [UserController::class, 'insert_add_user']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'DeleteUser']);

});


Route::group(['middleware' => 'climbers'], function () {
    Route::get('climbers/dashboard', [DashboardController::class, 'ClimbersDashboard']);

    //Test
    Route::get('climbers/test', [TestController::class, 'Test']);
    Route::get('climbers/test/add', [TestController::class, 'Addtest']);
    Route::post('climbers/test/add', [TestController::class, 'Storetest']);

    //Portfolio
    Route::get('climbers/portfolio', [PortfolioController::class, 'Homeportfolio']);
    Route::get('climbers/portfolio/add', [PortfolioController::class, 'Addportfolio']);
    Route::post('climbers/portfolio/add', [PortfolioController::class, 'Storeportfolio']);
    Route::get('/climbers/portfolio/edit/{id}', [PortfolioController::class, 'Editportfolio']);
    Route::post('/climbers/portfolio/update/{id}', [PortfolioController::class, 'Updateportfolio']);
    Route::get('/climbers/portfolio/delete/{id}', [PortfolioController::class, 'Deleteportfolio']);


});

Route::group(['middleware' => 'clients'], function () {
    Route::get('clients/dashboard', [DashboardController::class, 'ClientsDashboard']);

     //Guides
     Route::get('clients/guides', [PortfolioController::class, 'Homeguides']);
     Route::get('clients/guides/add', [PortfolioController::class, 'Addguides']);
     Route::post('clients/guides/add', [PortfolioController::class, 'Storeguides']);
     Route::get('/clients/guides/edit/{id}', [PortfolioController::class, 'Editguides']);
     Route::post('/clients/guides/update/{id}', [PortfolioController::class, 'Updateguides']);
     Route::get('/clients/guides/delete/{id}', [PortfolioController::class, 'Deleteguides']);
 

});

Route::get('logout', [AuthController::class, 'logout']);

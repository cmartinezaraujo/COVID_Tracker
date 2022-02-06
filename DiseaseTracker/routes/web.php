<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Network_MemberController;
use App\Http\Controllers\Organization_MemberController;
use App\Http\Controllers\Organization_NetworkController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ReportController;


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

Route::resource('users', UserController::class);

Route::resource('attachments', AttachmentController::class);

Route::resource('contacts', ContactController::class);

Route::resource('network_members', Network_MemberController::class);

Route::resource('organization_members', Organization_MemberController::class);

Route::resource('organization_networks', Organization_NetworkController::class);

Route::resource('reports', ReportController::class);


Route::resource('organizations', OrganizationController::class);


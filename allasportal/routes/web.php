<?php
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\auth\userController;
use App\Http\Controllers\admin\usersController;
use App\Http\Controllers\admin\jobsController;
use App\Http\Controllers\form\formController;
use App\Http\Controllers\main\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [mainController::class, 'main']); //főoldal
Route::get('/jobs', [mainController::class, 'jobs']);

Route::get('/auth/login', [loginController::class, 'login']); //login formja
Route::post('/auth/login', [loginController ::class, 'store'])->name('auth.loginStore');
Route::get('/auth/logout', [loginController::class, 'logout']); //kijelentkezés

Route::get('/auth/register', [registerController::class, 'register']); //register formja
Route::post('/auth/register', [registerController ::class, 'store'])->name('auth.registerStore');

Route::get('/auth/profile', [userController::class, 'profile']); //fiók adatai
Route::put('/auth/profile/nev/{id}', [userController::class, 'modifyName'])->name('auth.nameModify');
// Route::put('/auth/profile/email/{id}',[userController::class], 'modifyEmail')->name('auth.emailModify');
// Route::put('/auth/profile/pass/{id}',[userController::class], 'modifypass')->name('auth.passModify');
Route::put('/auth/profile/salary/{id}',[userController::class, 'modifySalary'])->name('auth.salaryModify');

Route::get('/admin/users', [usersController::class, 'users']); //adminként az összes fiók
Route::put('/admin/{id}', [usersController::class, 'modify'])->name('admin.usersModify');

Route::get('/admin/jobs', [jobsController::class, 'jobs']); //adminként az összes pozició
Route::delete('/admin/{id}', [jobsController::class, 'delete'])->name('admin.jobDelete');

Route::get('/application', [formController::class, 'form']); //jelentkezésnek az űrlapja
Route::post('/application/form', [formController::class, 'applyStore'])->name('job.applyStore');

Route::get('/jobs/newjob', [formController::class, 'newjob']); //jelentkezésnek az űrlapja
Route::post('/jobs/newjob', [formController::class, 'store'])->name('jobs.newjob');

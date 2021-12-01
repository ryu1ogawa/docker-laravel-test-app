<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Employee\ClassificationController;
use App\Http\Controllers\Employee\ContractKindController;
use App\Http\Controllers\Employee\CourseController;
use App\Http\Controllers\Employee\EducationFacilityController;
use App\Http\Controllers\Employee\SchoolNameController;

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

Route::get('member/create', [MemberController::class, 'create'])->name('member.create');
Route::post('member/store', [MemberController::class, 'store'])->name('member.store');
Route::post('member/{id}/edit', [MemberController::class, 'edit'])->name('member.edit');
Route::post('member/{id}/update', [MemberController::class, 'update'])->name('member.update');


Route::get('classification/create',[ClassificationController::class, 'create'])->name('classification.create');
Route::post('classification/store', [ClassificationController::class, 'store'])->name('classification.store');

Route::get('contract_kind/create',[ContractKindController::class, 'create'])->name('contract_kind.create');
Route::post('contract_kind/store', [ContractKindController::class, 'store'])->name('contract_kind.store');

Route::get('course/create',[CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');

Route::get('education_facility/create',[EducationFacilityController::class, 'create'])->name('education_facility.create');
Route::post('education_facility/store', [EducationFacilityController::class, 'store'])->name('education_facility.store');

Route::get('school_name/create',[SchoolNameController::class, 'create'])->name('school_name.create');
Route::post('school_name/store', [SchoolNameController::class, 'store'])->name('school_name.store');

Route::get('merchandise/create',[SchoolNameController::class, 'create'])->name('merchandise.create');
Route::post('merchandise/store', [SchoolNameController::class, 'store'])->name('merchandise.store');


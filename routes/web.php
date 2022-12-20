<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PregledController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('patients', [PatientController::class,'index'])->name('patients');
Route::middleware(['auth:sanctum', 'verified'])->get('add_patient', [PatientController::class,'create'])->name('add_patient');
Route::middleware(['auth:sanctum', 'verified'])->post('store_patient', [PatientController::class,'store'])->name('store_patient');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_patient', [PatientController::class,'delete'])->name('delete_patient');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_patient', [PatientController::class,'edit'])->name('edit_patient');
Route::middleware(['auth:sanctum', 'verified'])->post('update_patient', [PatientController::class,'update'])->name('update_patient');
Route::middleware(['auth:sanctum', 'verified'])->get('diseases', [DiseaseController::class,'index'])->name('diseases');
Route::middleware(['auth:sanctum', 'verified'])->get('add_disease', [DiseaseController::class,'create'])->name('add_disease');
Route::middleware(['auth:sanctum', 'verified'])->post('store_disease', [DiseaseController::class,'store'])->name('store_disease');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_disease', [DiseaseController::class,'delete'])->name('delete_disease');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_disease', [DiseaseController::class,'edit'])->name('edit_disease');
Route::middleware(['auth:sanctum', 'verified'])->post('update_disease', [DiseaseController::class,'update'])->name('update_disease');
Route::middleware(['auth:sanctum', 'verified'])->get('medicines', [MedicineController::class,'index'])->name('medicines');
Route::middleware(['auth:sanctum', 'verified'])->get('add_medicine', [MedicineController::class,'create'])->name('add_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('store_medicine', [MedicineController::class,'store'])->name('store_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_medicine', [MedicineController::class,'delete'])->name('delete_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_medicine', [MedicineController::class,'edit'])->name('edit_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('update_medicine', [MedicineController::class,'update'])->name('update_medicine');
Route::middleware(['auth:sanctum', 'verified'])->get('doctors', [DoctorController::class,'index'])->name('doctors');
Route::middleware(['auth:sanctum', 'verified'])->get('add_doctor', [DoctorController::class,'create'])->name('add_doctor');
Route::middleware(['auth:sanctum', 'verified'])->post('store_doctor', [DoctorController::class,'store'])->name('store_doctor');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_doctor', [DoctorController::class,'delete'])->name('delete_doctor');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_doctor', [DoctorController::class,'edit'])->name('edit_doctor');
Route::middleware(['auth:sanctum', 'verified'])->post('update_doctor', [DoctorController::class,'update'])->name('update_doctor');
Route::middleware(['auth:sanctum', 'verified'])->get('pregleds', [PregledController::class,'index'])->name('pregleds');
Route::middleware(['auth:sanctum', 'verified'])->get('add_pregled', [PregledController::class,'create'])->name('add_ppregled');
Route::middleware(['auth:sanctum', 'verified'])->post('store_pregled', [PregledController::class,'store'])->name('store_pregled');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_pregled', [PregledController::class,'delete'])->name('delete_pregled');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_pregled', [PregledController::class,'edit'])->name('edit_pregled');
Route::middleware(['auth:sanctum', 'verified'])->post('update_pregled', [PregledController::class,'update'])->name('update_pregled');

<?php

use Eftia\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/contact',[ContactController::class, 'index'])->name('contact.form');

Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');
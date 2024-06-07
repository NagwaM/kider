<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [FrontPages::class, 'home'])->name('home');
Route::get('about', [FrontPages::class, 'about'])->name('about');
Route::get('classes', [FrontPages::class, 'classes'])->name('classes');
Route::get('contact', [FrontPages::class, 'contact'])->name('contact');
Route::get('facility', [FrontPages::class, 'facility'])->name('facility');
Route::get('error', [FrontPages::class, 'facility'])->name('facility');
Route::get('error', [FrontPages::class, 'error'])->name('error');
Route::get('appointment', [FrontPages::class, 'appointment'])->name('appointment');
Route::get('callToAction', [FrontPages::class, 'callToAction'])->name('callToAction');
Route::get('team', [FrontPages::class, 'team'])->name('team');
Route::get('testimonial', [FrontPages::class, 'testimonial'])->name('testimonial');
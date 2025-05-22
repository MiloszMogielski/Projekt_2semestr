<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\ViewController::class, 'displayAll'])->name('home');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'displayAdmin'])->middleware('isAdmin');
Route::get('/manager', [App\Http\Controllers\ManagerController::class, 'displayManager'])->name('manager');
Route::get('/podcast/create', [App\Http\Controllers\PodcastController::class, 'create']);
Route::post('/podcast', [App\Http\Controllers\PodcastController::class, 'store']);

Route::patch('/delete_user/{id}', [App\Http\Controllers\AdminController::class, 'delete']);

Route::get('/manager/podcast/{id}', [App\Http\Controllers\ManagerController::class, 'showPodcasts']);

Route::patch('/manager/enable/{id}', [App\Http\Controllers\ManagerController::class, 'enableUser']);

Route::get('/my-podcasts/{user}', [App\Http\Controllers\MyPodcastsController::class, 'displayPodcasts'])->name('my-podcast.show');


Route::post('/add-rating', [App\Http\Controllers\RateController::class, 'addRating'])->name('rating.add');

Route::delete('/delete_user/{id}', [App\Http\Controllers\AdminController::class, 'delete']);

Route::get('/my-podcast/{podcast}/edit', [App\Http\Controllers\PodcastController::class, 'edit'])->name('my-podcast.edit');
Route::patch('/my-podcast/{podcast}', [App\Http\Controllers\PodcastController::class, 'update'])->name('my-podcast.update');
Route::post('/my-podcast/{podcast}/delete', [App\Http\Controllers\PodcastController::class, 'delete']);

Route::post('/hide-podcast', [App\Http\Controllers\PodcastController::class, 'hidePodcast']);

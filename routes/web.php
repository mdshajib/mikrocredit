<?php

use Illuminate\Support\Facades\Route;


Route::get( '/', App\Http\Livewire\Frontend\Home::class )->name( 'home' );
Route::get( '/test',  function (){
    return 'Test Pass';
});
Route::get( '/login', App\Http\Livewire\Auth\AuthManager::class )->name( 'login' );
Route::get( '/logout', [App\Http\Controllers\Auth\LogoutController::class,'logout'])->name( 'logout' );

Route::group(['middleware' => ['auth']], function (){
    Route::get( '/dashboard', App\Http\Livewire\Dashboard\Dashboard::class )->name( 'dashboard' );
    Route::get( '/users', App\Http\Livewire\Admin\User\UserManager::class )->name( 'user.list' );
    Route::get( '/user', App\Http\Livewire\Admin\User\NewUser::class )->name( 'user.create' );
    Route::get( '/user/{user_id}', App\Http\Livewire\Admin\User\UserManager::class )->name( 'user.show' );
    Route::get( '/user/{user_id}/edit', App\Http\Livewire\Admin\User\UserManager::class )->name( 'user.edit' );
});

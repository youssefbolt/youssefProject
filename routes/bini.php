<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('bini')->user();

    //dd($users);

    return view('bini.home');
})->name('home');


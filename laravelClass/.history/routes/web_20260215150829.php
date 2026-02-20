<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});


Route::get("register/user/{id}", function($id){
    return view("user.resgister", ("id"));
});
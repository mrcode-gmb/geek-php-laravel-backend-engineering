<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});


Route::get("register/user/{id}", function($id){
    $user = ['name' => 'John', 'email' => 'H6h1w@example.com', 'id' => $id];
    return view("user.resgister")->with(['user' => $user, 'id' => $id]);
});

Route::get("users/record", "UserController@index");
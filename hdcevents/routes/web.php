<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "André";
    $idade = 36;

    $arr = [10,20,30,40,50];

    $nomes = ["Matheus", "Maria", "João", "Saulo"];

    return view('welcome',
         [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
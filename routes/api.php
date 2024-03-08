<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome',function(Request $request){
    $nome = $request->input('nome');
return $nome; 
});

Route::get('receber/nome/idade',function(Request $request){
    $nome = $request->input('nome'); 
    $idade = $request->input('idade'); 
    return $nome . $idade;
});

Route::get('receber/nome/nascimento/cidadeNatal',function(Request $request){
    $nome = $request->input('nome'); 
    $nascimento = $request->input('nacimento'); 
    $cidadeNatal = $request->input('cidadeNatal');
    return $nome . $nascimento . $cidadeNatal;
});

Route::get('receber/primeiroNumero/segundoNumero',function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $resultado =  $segundoNumero . $primeiroNumero;
    return $resultado; 
});
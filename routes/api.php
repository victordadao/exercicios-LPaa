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

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero',function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $terceiroNumero = $request->input('$terceiroNumero');
    $resultado =  $segundoNumero - $primeiroNumero; - $terceiroNumero;
    return $resultado; 
});

Route::get('receber/primeiroNumero/segundoNumero',function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $resultado =  $segundoNumero / $primeiroNumero;
    return $resultado; 
});

Route::get('receber/primeiro/segundo',function(Request $request){
    $primeiroNumero = $request->input('$primeiro'); 
    $segundoNumero = $request->input('$segundo'); 
    $resultado =  $segundoNumero . $primeiroNumero;
    return $resultado; 
});

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero/quartoNumero/quintoNumero',function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $terceiroNumero = $request->input('$terceiroNumero');
    $quartoNumero = $request->input('$quartoNumero');
    $quintoNumero = $request->input('$quintoNumero');
    $resultado =  $primeiroNumero + $segundoNumero; + $terceiroNumero +  $quartoNumero +  $quintoNumero / 5;
    return $resultado; 
});

Route::get('receber/Numero1/Numero2',function(Request $request){
    $Numero1 = $request->input('Numero1'); 
    $Numero2 = $request->input('Numero2'); 
    $resultado =  $Numero1 / $Numero2;
    return $resultado; 
});

Route::get('receber/Numero',function(Request $request){
    $Numero = $request->input('Numero'); 
    $resultado =  $Numero * 2;
    return 'O dobro do ' . ($Numero) .' é igual a: '. $resultado;
});

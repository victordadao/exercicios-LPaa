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

Route::get('altura/base/area;',function(Request $request){
    $altura = $request->input('altura'); 
    $base = $request->input('base'); 
    $resultado = $base * $altura;
    return $resultado;
});

Route::get('valor/desconto;',function(Request $request){
    $valor = $request->input('valor'); 
   $desconto = $request->input('desconto'); 
    $resultado = $valor * $desconto / 100;
    return $resultado - $resultado;
});

Route::get('salario/aumento;',function(Request $request){
    $salario = $request->input('salario'); 
      $aumento = $request->input('aumento'); 
      $resultado =  $salario * $aumento / 100;
      return $salario + $resultado;
   });
   Route::get('pontos/valor',function(Request $request){
    $valor = $request->input('valor');
    $resultado = $valor/10;
    return $resultado;
});

Route::get('comissão/valor',function(Request $request){
    $valor = $request->input('valor');
    $resultado = $valor * 5 /100;
    return $resultado;
});
Route::get('hora/segundo/minuto',function(Request $request){
    $dias = $request->input('dias'); 
   $hora = $dias * 24;
   $minuto = $hora * 60;
   $segundo = $minuto * 60;
   $resultado = $hora . ',' . $segundo . ',' . $minuto;
   return $resultado;
  
});

Route::get('valortotal',function(Request $request){
    $valortotal = $request->input('valortotal');
    $quantia = $request->input('quantia');
    $resultado = $valortotal * $quantia;
    return $resultado;
});





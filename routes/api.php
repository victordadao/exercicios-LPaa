<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('receber/nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return $nome . $idade;
});

Route::get('receber/nome/nascimento/cidadeNatal', function (Request $request) {
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidadeNatal = $request->input('cidadeNatal');
    return $nome . $nascimento . $cidadeNatal;
});

Route::get('receber/primeiroNumero/segundoNumero', function (Request $request) {
    $primeiroNumero = $request->input('$primeiroNumero');
    $segundoNumero = $request->input('$segundoNumero');
    $resultado =  $segundoNumero + $primeiroNumero;
    return $resultado;
});

Route::get('receber/primeiroNu/segundoNu/terceiroNu', function (Request $request) {
    $primeiroNumero = $request->input('$primeiroNu');
    $segundoNumero = $request->input('$segundoNu');
    $terceiroNumero = $request->input('$terceiroNu');
    $resultado =  $segundoNumero - $primeiroNumero;
    -$terceiroNumero;
    return $resultado;
});

Route::get('receber/primeiro1/segundo2', function (Request $request) {
    $primeiro = $request->input('$primeiro');
    $segundo = $request->input('$segundo');
    $resultado =  $primeiro / $segundo;
    return $resultado;
});

Route::get('receber/primeiro/segundo', function (Request $request) {
    $primeiroNumero = $request->input('$primeiro');
    $segundoNumero = $request->input('$segundo');
    $resultado =  $segundoNumero * $primeiroNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero/quartoNumero/quintoNumero', function (Request $request) {
    $primeiroNumero = $request->input('$primeiroNumero');
    $segundoNumero = $request->input('$segundoNumero');
    $terceiroNumero = $request->input('$terceiroNumero');
    $quartoNumero = $request->input('$quartoNumero');
    $quintoNumero = $request->input('$quintoNumero');
    $resultado =  ($primeiroNumero + $segundoNumero + $terceiroNumero +  $quartoNumero +  $quintoNumero) / 5;
    return $resultado;
});

Route::get('receber/Numero1/Numero2', function (Request $request) {
    $Numero1 = $request->input('$Numero1');
    $Numero2 = $request->input('$Numero2');
    $resultado =  $Numero1 / $Numero2;
    return $resultado;
});

Route::get('receber/Numero/seg', function (Request $request) {
    $Numero = $request->input('Numero');
    $resultado =  $Numero * 2;
    return 'O dobro do ' . $Numero . ' é igual a: ' . $resultado;
});

Route::get('altura/base/area', function (Request $request) {
    $altura = $request->input('altura');
    $base = $request->input('base');
    $resultado = $base * $altura;
    return $resultado;
});

Route::get('valor/desconto', function (Request $request) {
    $valor = $request->input('valor');
    $desconto = $request->input('desconto');
    $resultado = $valor * $desconto / 100;
    return $resultado - $resultado;
});

Route::get('salario/aumento', function (Request $request) {
    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $resultado =  $salario * $aumento / 100;
    return $salario + $resultado;
});
Route::get('pontos/valor', function (Request $request) {
    $valor = $request->input('valor');
    $resultado = $valor / 10;
    return $resultado;
});

Route::get('comissão/valor', function (Request $request) {
    $valor = $request->input('valor');
    $resultado = $valor * 5 / 100;
    return $resultado;
});
Route::get('hora/segundo/minuto', function (Request $request) {
    $dias = $request->input('dias');
    $hora = $dias * 24;
    $minuto = $hora * 60;
    $segundo = $minuto * 60;
    $resultado = $hora . ',' . $segundo . ',' . $minuto;
    return $resultado;
});

Route::get('valortotal', function (Request $request) {
    $valortotal = $request->input('valortotal');
    $quantia = $request->input('quantia');
    $resultado = $valortotal * $quantia;
    return $resultado;
});

Route::get('exemplo/condicao', function (Request $request) {
    $idade = $request->input('idade');
    $retorno = "";
    if ($idade >= 18) {
        $retorno = "Maior de idade";
    } else {
        $retorno = "Menor de idade";
    }
    return $retorno;
});

Route::get('verifica/idade', function (Request $request) {
    $idade = $request->input('idade');

    if ('idade' >= 18) {
        return "maior de idade";
    } else {
        return "menor idade";
    }
});

Route::get('par/impar', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return "ele é par";
    } else {
        return "ele é impar";
    }
});

Route::get('maior/numero', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 10) {

        return "maior que 10";
    } else {
        return "menor que 10";
    }
});

Route::get('calor', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 30) {

        return "Esta quente";
    } else {
        return "normal";
    }
});

Route::get('menor ou maior', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 0) {
        return "maior que 0";
    } else {
        return "menor que 0";
    }
});


Route::get('maior', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 > $numero2) {
        return "imprime numero1";
    } else {
        return "imprime numero2";
    }
});

Route::get('divisão', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 3 == 0) {
        return "divisivel";
    } else {
        return "não divisivel";
    }
});

Route::get('divisivel', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 9 == 0) {
        return "divisivel";
    } else {
        return "não divisivel";
    }
});

Route::get('graos', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 30) {

        return "Esta quente";
    } else {
        return "normal";
    }
});

Route::get('divisivel7', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 7 == 0) {
        return "divisivel";
    } else {
        return "não divisivel";
    }
});

Route::get('exercicio1', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 10) {

        return "maior que 10";
    } else {
        return "menor que 10";
    }
});

Route::get('exercicio2', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 0) {
        return "positivo";
    } else {
        return "negativo";
    }
});


Route::get('exercicio 3', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

Route::get('exercicio4', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return "ele é par";
    } else {
        return "ele é impar";
    }
});

Route::get('exercicio5', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 > $numero2) {
        return "imprime numero1";
    } else {
        return "imprime numero2";
    }
});

Route::get('exercicio6', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 9 == 0) {
        return "divisivel";
    } else {
        return "não divisivel";
    }
});

Route::get('exercicio7', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 30) {

        return "Esta quente";
    } else {
        return "normal";
    }
});

Route::get('exercicio8', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 7 == 0) {
        return "divisivel";
    } else {
        return "não divisivel";
    }
});

Route::get('exercicio9', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade > 12) {
        return "maior de 12";
    } else {
        return "criança";
    }
});












Route::get('exercicio11', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 100) {

        return "maior que 100";
    } else {
        return "menor que 100";
    }
});

Route::get('exercicio12', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 6 == 0) {
        return "divisivel";
    } else {
        return "não divisivel";
    }
});

Route::get('exercicio13', function (Request $request) {
    $nome = $request->input('nome');
    if ($nome == 'alice' ) {
        return "imprime";
    } else {
        return "nao imprime";
    }
});


Route::get('exercicio14', function (Request $request) {
    $idade = $request->input('idade');
   $abilitação = $request->input('abilitação');

}); 
































   
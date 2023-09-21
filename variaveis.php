<?php
    //primeiro exercicio
    echo "<h3>Primeiro Exercicio</h3><br>";

    //variavel de tipo String
    $nome = "meu nome é Pedro";
    echo "$nome";
    echo "<br><br>";

    //variavel de tipo Inteiro
    $ano = 2023;
    echo "$ano";
    echo "<br><br>";

    //variavel de tipo Float
    $pi = 3.14159265;
    echo "$pi";
    echo "<br><br>";

    //variavel de tipo Booleano
    $sim = "true";
    echo "$sim";
    echo "<br><br>";

    //Segundo Exercicio
    echo "<h3>Segundo Exercicio</h3>";
    echo "<br>";

    //variaveis
    $num = 23.8;

    //is_int() Verifica se o número é inteiro
    if(is_int($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_integer() Verifica se o número é inteiro
    if(is_integer($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_long() Verifica se a variavel e número inteiro ou não
    if(is_long($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_float Verifica os numero que não é inteiro,ou seja, é quebrado
    if(is_float($num)){
        echo"$num nâo é Número Inteiro <br>";
    }
    else{
        echo "$num é Número Inteiro <br>";
    }

    //is_string()
    if(is_string($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_array()
    if(is_array($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_object() Verifica se o número de ponto flutuante é real ou não
    if(is_object($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_real() Verifica se o número de ponto flutuante é real ou não, porem não funciona mais em php

    // if(is_real($num)){
    //     echo"$num é Número Inteiro <br>";
    // }
    // else{
    //     echo "$num nâo é Número Inteiro <br>";
    // }

    //Terceiro exercicio
    echo "<h3>Terceiro Exercicio</h3><br>";

    //variavel
    $num2 = 2.5;    
    settype($num,"integer");
    echo "Valor Inteiro: $num2";
?>
<?php
    //primeiro exercicio
    echo "<h3>Primeiro Exercicio</h3><br>";

    //variavel de tipo String
    $nome1 = "meu nome é Pedro";
    echo "$nome1";
    echo "<br><br>";

    //variavel de tipo Inteiro
    $ano1 = 2023;
    echo "$ano1";
    echo "<br><br>";

    //variavel de tipo Float
    $pi1 = 3.14159265;
    echo "$pi1";
    echo "<br><br>";

    //variavel de tipo Booleano
    $sim1 = "true";
    echo "$sim1";
    echo "<br><br>";

    //Segundo Exercicio
    echo "<h3>Segundo Exercicio</h3>";
    echo "<br>";

    //variaveis
    $num2 = 23.8;

    //is_int() Verifica se o número é inteiro
    if(is_int($num2)){
        echo"$num2 é Número Inteiro <br>";
    }
    else{
        echo "$num2 nâo é Número Inteiro <br>";
    }

    //is_integer() Verifica se o número é inteiro
    if(is_integer($num2)){
        echo"$num2 é Número Inteiro <br>";
    }
    else{
        echo "$num2 nâo é Número Inteiro <br>";
    }

    //is_long() Verifica se a variavel e número inteiro ou não
    if(is_long($num2)){
        echo"$num2 é Número Inteiro <br>";
    }
    else{
        echo "$num2 nâo é Número Inteiro <br>";
    }

    //is_float Verifica os numero que não é inteiro,ou seja, é quebrado
    if(is_float($num2)){
        echo"$num2 nâo é Número Inteiro <br>";
    }
    else{
        echo "$num2 é Número Inteiro <br>";
    }

    //is_string()
    if(is_string($num2)){
        echo"$num2 é Número Inteiro <br>";
    }
    else{
        echo "$num2 nâo é Número Inteiro <br>";
    }

    //is_array()
    if(is_array($num2)){
        echo"$num2 é Número Inteiro <br>";
    }
    else{
        echo "$num2 nâo é Número Inteiro <br>";
    }

    //is_object() Verifica se o número de ponto flutuante é real ou não
    if(is_object($num2)){
        echo"$num2 é Número Inteiro <br>";
    }
    else{
        echo "$num2 nâo é Número Inteiro <br>";
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
    $num3 = 2.5;    
    settype($num3,"integer");
    echo "Valor Inteiro: $num3";
?>
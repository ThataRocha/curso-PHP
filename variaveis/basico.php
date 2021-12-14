<div class="titulo">Variaveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);

    echo '<br>';
    $a = 3;
    $b = 16;
    $soma = $a + $b;

    echo $soma;
    echo '<br>';
    echo isset ($soma);
    //zerar uma variavel
    unset ($soma);
    echo '<br>';
    var_dump( $soma);

    //outro exemplo

    $variavel = 10;
    echo '<br>' . $variavel;

    $variavel = 'Agora sou uma string!';
    echo '<br>'. $variavel;

    //nomenclatura de variável
    $var = 'valida';
    $var2 = 'valida';
    $VAR3 = 'valida';
    $_var_4 = 'valida';
    //$vâr5 = 'valida'; //evitar acentuação
    //$6var = 'Invalido'
    //$var8%  = 'Invalido'
    //$%var  = 'Invalido'

?>
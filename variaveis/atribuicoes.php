<div class="titulo">Atribuições</div>
<?php

    $numero = 10;   
    echo '<br>'.$numero;
    $numero = $numero -3;
    echo '<br>'.$numero;
    $numero = $numero + 1.5;
    echo '<br>'. $numero;
    $numero--;
    --$numero;
    echo '<br>'.$numero;
    $numero++;
    ++$numero;
    echo '<br>'.$numero;
    $numero = 20;
    echo '<br>'.$numero;
    $numero -= 5;
    echo '<br>'.$numero;
    $numero += 5;
    echo '<br>'.$numero;
    $numero *= 10;
    echo '<br>'.$numero;
    $numero /= 2;
    echo '<br>'.$numero;
    $numero %= 6;
    echo '<br>'.$numero;
    $numero **= 4;
    echo '<br>'.$numero;
    $numero .= 4;  // apenas concatenação do valor!
    echo '<br>'.$numero;

    $texto = 'Esse é um texto';
    echo '<br>'.$texto;
    $texto = $texto. ' qualquer';
    echo '<br>'.$texto;
    $texto .= ' de verdade!';
    echo '<br>'.$texto;

    //$variavelInexistente = 'valor existe!';
    $valor = $variavelInexistente ?? 'valor default';
    echo '<br>'.$valor;

    // quando documentado ou no caso nullo o valor da variavel valor automaticamente entra o valor padrão configurado no caso a mensagem 'valor default'!

?>

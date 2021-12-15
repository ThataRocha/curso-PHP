<div class="titulo">Variáveis de Variáveis</div>

<!-- https://www.php.net/manual/pt_BR/language.variables.variable.php -->

<?php
    $a = 'ValorA';
    $$a = 'valorAA';
    echo "$a , {$$a}";

    echo '<br>';
    $opa = 'oia';
    $oia = 'vish';
    $vish = 'eita!!';

    echo (" $opa, {$$opa}, {$$$opa}");
    echo('<br>');
    echo ("https://www.php.net/manual/pt_BR/language.variables.variable.php");

?>
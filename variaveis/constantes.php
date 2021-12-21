<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS . "!";

    //Constantes não pode ter $ na declaração;
    // São sempre declaradas em maiusculo.
    // constante não pode ser alteradas no decorrer do código, obvio!

    const NOVA_TAXA = 3.5;
    echo "<br> ". NOVA_TAXA;

    // Não posso atribuir essa variavel constante a nenhuma outra variavel que dará erro no código;
    // Não consigo adicionar nenhuma outra variavel dentro de uma constante declada com const que também dará erro!;
    // Porém se for declada a constante com o define() aceitará o recebimento da atribuição por variável. 
    $valor = 2.5;
    define('NOVA_TAXA1', $valor);
    echo '<br>'. NOVA_TAXA1;

    const TAXA_SOMA = 2.8 + 1.2;
    echo '<br>'. TAXA_SOMA;

    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;

    echo '<br> Linha:' . __LINE__;
    echo '<br> ' .__FILE__;
    echo '<br>' .__DIR__;

?>
<div class="titulo">Desafio</div>

<ul>
    <li> 1+1 = <?= 1+1 ?></li>
    <li> 4+4 = <?php echo 4+4?></li>
    <li> <?php echo "8+8 = " ?><?php echo 8+8 ?></li> <!-- jeito doido de desenvolver, nunca faça isso em casa! -->
</ul>

<?php
    echo ('Informe o primeiro número:<br>');
    //leia n1
    echo ('Informe o segundo número:<br>');
    //leia n2
    $soma = $n1 + $n2;

    echo('A soma dos dois números é'.$soma);
?>
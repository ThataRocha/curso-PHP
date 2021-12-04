<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1, '<br>';
    var_dump (1+1.0); // se comparar dois tipos sendo um inteiro e um float, o tipo predominante será o float, mesmo a soma dando um resultado inteiro!
    echo '<br>';
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2 * 5, '<br>';
    echo 7/4, '<br>';
    echo 'Se quiser apenas um resultado inteiros de uma divisão: <br>';
    echo intdiv(7,4), '<br>';

    echo round (7/4), '<br>'; // arrendondar 

    echo 7 % 4, '<br>';
    echo 7 % 2, '<br>';
    echo 8 % 2, '<br>';
    echo 7 / 0, '<br>'; // valor infinito! INF
     echo 4**2, '<br>';// exponenciação

   // Precedência de operações 
   // () => ** => * % => + -
   echo '<p> Precedência </p>';
   echo 2 + 3 * 4, '<br>';
   echo (2+3) * 4, '<br>';
   echo 2 + 3 * 4 ** 2, '<br>';
   echo ((2 + 3) * 4) ** 2, '<br>';
?>

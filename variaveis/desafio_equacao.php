<div class="titulo">Desafio de Equação</div>

<?php
    $varA = 3;
    $varB = 2;

    echo $resultado = ((6*($varB + $varA))**$varB / ($varB * $varA)-(((1-5)*($varB - 7)) / $varB )**$varB) **$varA / (10 ** $varA);


    // Resposta do professor

    $numA = (6*(3+2))**2;
    $denA = 3*2;
    
    $numB =  (1-5)*(2-7);
    $denB = 2;

    $superiroA = $numA / $denA;
    $superiorB = ($numB / $denB)**2;

    $superior = ($superiroA - $superiorB)**3;
    $inferior = 10**3;

    $final = $superior / $inferior;

    echo "<br> O resultado final é".$final.".";

?>
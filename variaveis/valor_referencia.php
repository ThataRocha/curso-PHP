<div class="titulo">Valor vs Referência</div>

<?php
    $variavel = 'valor inicial';
    $variavelValor = $variavel;
    $variavelReferencia = &$variavel;

    echo " Variavel  = $variavel";
    echo "<br> VariavelValor = $variavelValor";
    echo "<br> VariavelReferencia = $variavelReferencia";
   
    
    // Atribuição por valor
    echo "<hr> VARIAVEL POR VALOR";
    
    $variavelValor = 'novo valor';
    echo "<br> variavel = $variavel";
    echo "<br> variavelValor = $variavelValor";
    echo "<br> *Alterei o dados contidos na variavelValor, porém não alterou a variavel variavel!(Outro Lugar na memória!)";

    // Atribuição por Referência
    echo "<hr> VARIAVEL POR REFERÊNCIA";
  
    $variavelReferencia = 'valor por referência';
    echo "<br> variavel  =  $variavel";
    echo "<br> variavelReferencia  =  $variavelReferencia";
    echo "*<br> *Alterei o dados contidos na variavelReferencia e junto alterou a variavel variavel(Mesma locação na memória!)"
?>
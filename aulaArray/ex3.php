<?php


$vetor = array();
$SOMA = 0;
$MAIOR = 0;
$POSICAO = 0;
 
for ($i = 0; $i <= 30; $i++){
    $vetor[$i] = $i;
    
    if($vetor[$i]> $MAIOR){
        $MAIOR = $vetor[$i] ;
        $POSICAO = $i;
    }
    
    $SOMA = $vetor[$i] + $SOMA;
    
    $media = $SOMA / count($vetor);
}
  
    $media = $SOMA / count($vetor);
    echo"<pre>";
    print_r($vetor);
   echo"</pre>";
echo 'O maior número é: '. $MAIOR. ' Encontrado na posição: '. $POSICAO . '<br>';
echo 'A soma é: '.$SOMA. '<br>';
echo 'A média do do vetor é ='.$media. '<br>';

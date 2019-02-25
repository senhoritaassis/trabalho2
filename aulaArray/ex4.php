<?php


$vetor = array();
for ($i = 0; $i < 50; $i++){
    $vetor[$i] = $i*2;
  echo 'I: '. $i. ' V: '. $vetor[$i]. '<br>';  
}
 echo"<pre>";
    print_r($vetor);
   echo"</pre>";
<?php
$vetor = array();
$vetor[0] = "Dr.Estranho";
$vetor[1] = "Thanos";
$vetor[2] = "PeterParker";
$vetor[3] = "ViuvaNegra";
$vetor[4] = "Rocky";
$vetor[5] = "TonyStark";
$vetor[6] = "Thor";
$vetor[7] = "HulkEsmaga";
$vetor[8] = "PeterQuill";
$vetor[9] = 'EusouGroot';

echo "<select>";
    for ($i = 0; $i < 10; $i++) {
       echo "<option>$vetor[$i]</option>"; 
       
    }
echo "</select>";

	
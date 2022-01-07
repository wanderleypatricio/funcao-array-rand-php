<?php

function arrayRand(){
    $vetor =  array();
    
    for($i = 1; $i <= 20; $i++){
        array_push($vetor, rand(1,10));
        
    }
    $valores = $vetor;
    $valores = array_unique(array_diff_assoc(
    $valores, array_unique($valores)));
   
    $result = array_diff($vetor, $valores);
    
    echo json_encode($vetor);
    
    $nao_repetidos = array();
    
    echo "<br>Os números que não se repetem são: ";
    
    foreach ($result as $valor){
        echo $valor." ";
    }
    
    
    
}

arrayRand();
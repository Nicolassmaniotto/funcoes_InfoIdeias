<?php
// Receba como parametro um array de números inteiros e responda TRUE or FALSE
//  se é possível obter uma sequencia crescente removendo apenas um elemento do array.
function SequenciaCrescente($array){
    $cont = 0;
    for($i=0;($i<count($array)-1);$i++){
        if($array[$i]>=$array[$i+1]){
            $cont++;
        }
    }
    if(count(array_diff_key($array,array_unique($array)))>1){
        return 0;
    };
    if($cont ==1){
        return $cont;
    }else{
        return 0;
    }

}

$array = [1, 2, 1, 2];

echo SequenciaCrescente($array);
?>
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
        return false;
    };
    if($cont ==1){
        return true;
    }else{
        return false;
    }

}
//teste Area
$array = [[1, 3, 2, 1],//false
[1, 3, 2],//true
[1, 2, 1, 2],//false
[3, 6, 5, 8, 10, 20, 15],//false
[1, 1, 2, 3, 4, 4],//false
[1, 4, 10, 4, 2],//false
[10, 1, 2, 3, 4, 5],//true
[1, 1, 1, 2, 3],//false
[0, -2, 5, 6],//true
[1, 2, 3, 4, 5, 3, 5, 6],//false
[40, 50, 60, 10, 20, 30],//false
[1, 1],//true
[1, 2, 5, 3, 5],//true
[1, 2, 5, 5, 5],//false
[10, 1, 2, 3, 4, 5, 6, 1],//false
[1, 2, 3, 4, 3, 6],//true
[1, 2, 3, 4, 99, 5, 6],//true
[123, -17, -5, 1, 2, 3, 12, 43, 45],//true
[3, 5, 67, 98, 3]];//true
for($i=0;$i<count($array);$i++){
    $recebe = SequenciaCrescente($array[$i]);
    $ver = "|$i : $recebe |";
    echo $ver;
//    echo  SequenciaCrescente($array[$i]);
    // echo array_count_values($array[$i]);
}
?>

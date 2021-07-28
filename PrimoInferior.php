<?php
function PrimoInferior($num){
//     Crie uma função que receba como parâmetro um número inteiro e 
//     retorne o maior número primo inferior ao número recebido como parâmetro.
//      Se o argumento for negativo, a função deverá retornar o valor zero.
    $cont = 0;
    for($i = 1; $i < $num; $i++){
        $ver = 0;
      for($j = $i; $j >= 1; $j--){
        if (($i % $j) == 0) {
            $ver++;
        }
        if ($ver > 2){
            break;
        }
      }
      if ($ver == 2){
          $cont = $i;
      }
  }
  return $cont;

}

echo PrimoInferior(7);
?>
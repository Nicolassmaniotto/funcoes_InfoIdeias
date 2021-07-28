<?php
// Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. 
// Depois informe qual número mais se repetiu e quantas vezes ele se repetiu.
// Exemplo
// Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
// O número que mais se repete é o 2. 
// Ele se repete 4 vezes
$arr = [];
for($i=0;$i<20;$i++){
  $arr[$i] = rand(1,10);
}
$som =0;
// $arr =  [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1];
$array = [];
foreach ($arr as $key => $value) {
  if(isset($array[$value]))
      $array[$value] += 1;
  else
      $array[$value] = 1;
}
$pos = 0;
$value = 0;
foreach ($array as $cont => $n) {
  if($value <$n){
    $pos = $cont;
    $value = $n;
  };

}
echo "O número que mais se repete é o $pos <br>";
echo "Ele se repete $value vezes";
?>
<?php
function SeculoAno($ano){
    $calculo = $ano / 100;
    return ceil($calculo);
}
echo SeculoAno(1700);
?>
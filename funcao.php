<?php
function validar($valor1, $valor2){
    return is_numeric($valor1) && is_numeric($valor2);
}
function somar($valor1, $valor2){
    return $valor1+$valor2;
}
function subtrair($valor1, $valor2){
    return $valor1-$valor2;
}
function multiplicar($valor1, $valor2){
    return $valor1*$valor2;
}
function dividir($valor1, $valor2){
    return $valor2 != 0 ? $valor1/$valor2: "Divisao por zero";
}
?>
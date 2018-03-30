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
    return $valor1/$valor2;
}
if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['operacao'])){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];  
    
    if(validar($valor1, $valor2)) {
        switch ($operacao) {
            case 'somar':
                echo(somar($valor1, $valor2));
                break;
            case 'subtrair':
                echo(subtrair($valor1, $valor2));
                break;
            case 'multiplicar':
                echo(multiplicar($valor1, $valor2));
                break;
            case 'dividir':
                echo(dividir($valor1, $valor2));
                break;
        }
    }else{
        echo('Valor inválido');
    }
}
?>
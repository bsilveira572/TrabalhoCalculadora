<?php
include('funcao.php');
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
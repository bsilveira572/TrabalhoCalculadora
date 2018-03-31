<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora Simples</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form method="post" action="index.php">
            <input type="text" step="0.001" name="valor1" size='23'><br><br>
            <input type="text" step="0.001" name="valor2" size='23'><br><br>
            <select name="operacao">
                <option value='somar'>Soma</option>
                <option value='subtrair'>Subtração</option>
                <option value='multiplicar'>Multiplicação</option>
                <option value='dividir'>Divisão</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
        <?php
        include('calcular.php');
        ?>
    </body>
</html>

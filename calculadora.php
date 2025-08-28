<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora Simples</title>
    </head>
    <body>
        <h1>Calculadora Simples</h1>
        <form method="GET" action="">
            <label for="num1">Número1:</label><br>
            <input type="text" name="n1"><br>
            <label for="num2">Número2:</label><br>
            <input type="text" name="n2"><br>
            <input type="submit" value="Calcular">
            <fieldset style="margin-right: 1000px;">
                <legend>Operações</legend>
                <input type="radio" name="op" value="soma" checked>Soma<br>
                <input type="radio" name="op" value="subtração">Subtração<br>
                <input type="radio" name="op" value="multiplicação">Multiplicação<br>
                <input type="radio" name="op" value="divisão">Divisão<br>
            </fieldset>
        </form>
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if (isset($_GET['n1']) && isset($_GET['n2']) && is_numeric($_GET['n1']) && is_numeric($_GET['n2'])) {
                    $n1 = $_GET['n1'];
                    $n2 = $_GET['n2'];

                    // Funções para as operações
                    function soma($n1, $n2) {
                        return $n1 + $n2;
                    }

                    function subtracao($n1, $n2) {
                        return $n1 - $n2;
                    }

                    function multiplicacao($n1, $n2) {
                        return $n1 * $n2;
                    }

                    function divisao($n1, $n2) {
                        if ($n2 == 0) {
                            return "Erro: Divisão por zero!";
                        }
                        return $n1 / $n2;
                    }

                    // Exibir o resultado conforme a operação escolhida
                    if ($_GET['op'] == 'soma') {
                        echo "<h2>Resultado: $n1 + $n2 = " . soma($n1, $n2) . "</h2>";
                    } elseif ($_GET['op'] == 'subtração') {
                        echo "<h2>Resultado: $n1 - $n2 = " . subtracao($n1, $n2) . "</h2>";
                    } elseif ($_GET['op'] == 'multiplicação') {
                        echo "<h2>Resultado: $n1 * $n2 = " . multiplicacao($n1, $n2) . "</h2>";
                    } elseif ($_GET['op'] == 'divisão') {
                        echo "<h2>Resultado: $n1 ÷ $n2 = " . divisao($n1, $n2) . "</h2>";
                    }
                } else {
                    echo "<h2>Por favor, insira números válidos.</h2>";
                }
            }
        ?>
    </body>
</html>
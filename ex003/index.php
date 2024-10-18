<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 
        $num = "567"; //string
        $num = (int) "567"; //convertendo para inteiro
        echo "<p>Valor da variável = $num</p>";

        $valor = 3.67;
        var_dump($valor); //mostrando o tipo

        echo "</br></br>";
        $tabagista = false;
        var_dump($tabagista);

        echo "</br></br>";
        echo "O valor para tabagista é $tabagista"; //cuidado, valores booleans não são mostrados no echo e print

        echo "</br></br>";
        $array = [3, 4.78, "João", true, 9];
        var_dump($array); //array

        echo "</br></br>";
        class Pessoa{
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p); //object

    ?>
</body>
</html>
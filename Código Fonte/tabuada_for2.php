<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Estrutura FOR</title>
</head>
<body>

    <?php
        $num = $_POST["valor"];
        echo "Tabuada de $num é: ";
        for ($c=1;$c<=10;$c++){
            $r = $num * $c;
            echo "<br>$c x $num = $r";
        }
    ?>

</body>
</html>
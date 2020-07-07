<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Estrutura FOR</title>
</head>
<body>

    <form action="tabuada_for2.php" method="POST">
        <select name="valor">
            <?php
            for($n=1;$n<=10;$n++){
                echo "<option>$n</option>";
            }
            ?>
        </select>
        <input type="submit" value="Enviar">
    </form>    
</body>
</html>
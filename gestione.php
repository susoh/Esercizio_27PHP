<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST["name"];
        $costo = intval($_POST["costo"]);
        $quantita = $_POST["quantita"];
        $usato = false;
        if (isset($_POST["used"])) {
            $usato = true;
        }
        $metodo = $_POST["pay"];
        $costoTotale = $costo;
        if ($usato) {
            $costoTotale = $costo - $costo*0,2;
        }
    ?>
</body>
</html>
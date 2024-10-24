<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="gestione.php" method="post">
        Nome Prodotto:<input type="text" name="name"><br>
        Costo:<input type="text" name="costo"><br>
        Quantità<select name="quantita" >
            <option value="1">1</option>
            <option value="1">2</option>
            <option value="1">3</option>
            <option value="1">4</option>
        </select><br>
        stato dell'oggetto:<input type="checkbox" name="used"> usato <br>
        metodo di pagamento
        <input type="radio" name="pay" value="contanti">Contanti
        <input type="radio" name="pay" value="carta">Carta
        <input type="radio" name="pay" value="buono digitale"> Buono Digitale
        <br>
        <input type="submit" value="INVIA">  
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ciao</h1>
    <?php 
    $testo = "Ciao sono un testo!";
    echo $testo . " Lunghezza: " . strlen($testo);

    $parola = $_GET["word"];

    $nuovo_testo = str_replace($parola, '***', $testo);

    echo "<br/>" . $nuovo_testo . ' Lunghezza: ' . strlen($nuovo_testo);

    
    ?>
</body>
</html>
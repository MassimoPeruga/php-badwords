<?php
// Recupera i dati dalla query string
$paragrafo = $_GET["paragrafo"];
$parolaCensurata = $_GET["parola"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
        <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap -->
    <!-- Il mio foglio di stile -->
    <link rel="stylesheet" href="./style.css">
    <!-- /Il mio foglio di stile -->
</head>
    <body>
        <div class="container">
            <h1>PHP Badwords</h1>
            <div class="ms_contenitore">
                <div class="row justify-content-center">
                    <div class="col-5 ms_colonna">
                        <h2>Paragrafo e Lunghezza:</h2>
                        <?php
                        // Stampa il paragrafo e la sua lunghezza
                        echo "<p>$paragrafo</p>";
                        echo "<h6>Lunghezza: " . strlen($paragrafo) . "</h6>";
                        ?>
                    </div>
                    <div class="col-5 ms_colonna">
                        <h2>Paragrafo Censurato e Lunghezza:</h2>
                        <?php
                        // Sostituisci la parola da censurare con ***
                        $paragrafoCensurato = str_replace($parolaCensurata, '***', $paragrafo);

                        // Stampa il paragrafo censurato e la sua lunghezza
                        echo "<p>$paragrafoCensurato</p>";
                        echo "<h6>Lunghezza: " . strlen($paragrafoCensurato) . "</h6>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
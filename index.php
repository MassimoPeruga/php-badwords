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
                <h2 class="mb-3">Inserisci un testo e la parola che vuoi censurare:</h2>
            
                <form action="process.php" method="get" class="ms_colonna w-75 d-flex flex-wrap">

                    <div class="input-group mb-3">
                        <span class="input-group-text">Testo:</span>
                        <label for="paragrafo" class="visually-hidden">Testo:</label>
                        <textarea class="form-control" aria-label="With textarea" name="paragrafo" id="paragrafo"></textarea>
                    </div>

                    <div class="form-floating w-50">
                        <input type="text" class="form-control" name="parola" id="parola" placeholder="Parola da censurare:">
                        <label for="parola" class="form-label">Parola da censurare:</label>
                    </div>
                    
                    <input type="submit" value="Censura" id="ms_button" class="btn ms-3">
                </form>
            </div>
        </div>

    </body>
</html>
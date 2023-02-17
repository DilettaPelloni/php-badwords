<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>

        <h1>PHP Badwords</h1>

        <?php 
            $text = 'In informatica, una variabile booleana, o semplicemente booleano, è un tipo di dato che assume valori "booleani", ovvero soltanto due possibili valori che rappresentano il valore di verità in un\'algebra di Boole. Tipicamente i due possibili valori sono indicati come "vero" o "falso" (in inglese "true" o "false") oppure come 1 o 0. Una funzione di variabili booleane è chiamata funzione booleana; in un\'accezione più generale, una variabile booleana può essere a sua volta funzione di variabili booleane. Il nome deriva da George Boole.';
            
            $badWord = $_GET['badWord'];
        ?>

        <h3>Paragrafo:</h3>

        <p>
            <?php
                echo $text;
            ?>
        </p>

        <h4>
            Lunghezza del paragrafo:
            <?php
                echo strlen($text);
            ?>
            caratteri
        </h4>

        <h4>Inserisci la parola da censurare:</h4>
        <form method="get">
            <input type="text" placeholder="Scrivi una parola" name="badWord">
            <button>Censura</button>
        </form>

        <h3>Paragrafo censurato:</h3>
        <p>
            <?php
                echo str_replace($badWord, '***', $text);
            ?>
        </p>
        
    </body>
</html>
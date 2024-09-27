<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
        $modello = "iphone 14";
        $grado = "A";
        switch ($grado) {
            case "A":
                echo "<h2>$modello perfetto, pari al nuovo</h2>";
                break;
            case "B":
                echo "<h2>$modello in ottime condizioni</h2>";
                break;
            case "C":
                echo "<h2>$modello con graffi e/o segni di usura</h2>";
                break;
            default :
                echo "<h2 class='text-danger'> ERRORE: grado non riconosciuto</h2>";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
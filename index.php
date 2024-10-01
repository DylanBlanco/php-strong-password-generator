<?php
    require_once __DIR__.'/partials/functions.php';

    $minLenght = 0;
    $maxLenght = 16;

    $lenght = null;
    $password = null;

    if (isset($_Get['lenght'])) {
        $lenght = intval($_GET['lenght']);

        if ($lenght >= $minLenght && $lenght <= $maxLenght) {
            $password = generatePass($lenght);
            var_dump($password);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link css-->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- link BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <header>
        <div class="container text-center">
            <h1>
                PHP Strong Password Generator
            </h1>
        </div>
    </header>
    <main>
        <div class="container text-center p-5">
            <div class="row">
                <div class="col col-sm-6 mx-sm-auto">
                    <form action="" method="GET">
                        <div class="mb-3">
                            <div class="p-2">
                                <labelfor="lenght" class="form-label">                                    
                                    <strong>
                                        Lunghezza della password:
                                    </strong>
                                </label>
                            </div>

                            <div class="p-2">
                                <input 
                                    type="number"
                                    id="lenght"
                                    name="lenght"
                                    placeholder="Inserisci lunghezza password..."
                                    class="form-control"
                                    required
                                    value="
                                    <?php
                                        if(isset($_GET['lenght'])) {
                                            echo $_GET['lenght'];
                                        }
                                    ?>"
                                    min="<?php echo $minLenght; ?>"
                                    max="<?php echo $maxLenght; ?>"
                                >
                            </div>

                            <div class="p-2">
                                <button type="submit" class="btn btn-danger">Crea PSW</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col">                
                    <?php
                        if ($password != null) {
                    ?>
                        <div class="row">
                            <div class="col text-center">
                                <h5>
                                    La tua password è:
                                </h5>
                                <p>
                                    <?php
                                        echo $password;
                                    ?>
                                </p>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    
    <!--link js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
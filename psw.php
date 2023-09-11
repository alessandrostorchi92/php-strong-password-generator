<?php

session_start();

// Per cambiare password inserire nell'URL: index.php?length_psw=number 

if(!isset($_SESSION['password'])) {
    header("Location: ./index.php");
    die;
  }

?>

<!doctype html>
<html lang="en">

<head>

    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="/vite.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Creare una pagina che permetta agli utenti di utilizzare il generatore di password ">
        <title>PHP Strong Password Generator</title>

        <!-- Framework bootstrap css  -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Framework bootstrap js  -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <!-- Custom css  -->

        <link rel="stylesheet" href="./css/style.css">

    </head>

    <body>

        <div class="container py-5 text-center">
        
            <h1 class="mt-5">La tua password è:<?php echo $_SESSION ["password"] ?></h1>
        
        </div>
        
    </body>





</html>
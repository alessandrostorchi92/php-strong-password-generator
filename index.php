<?php

include_once 'function.php';

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

    <div class="container bg-info text-center">
        <h1 class="mb-5 display-1 mt-4">PHP Strong Password Generator</h1>
        <p class="mb-5 fw-bold fs-3">Inserisci la lunghezza della password che desideri generare</p>

        <form action="index.php" method="GET">
            <label class="mt-5 mb-5 text-white fw-bold">Lunghezza della password: </label>
            <input type="number" name="length_psw" min="1" max="16" required>
            <button type="submit" class="btn btn-outline-light ms-4 fw-bold">Genera Password</button>
        </form>

</body>

</html>
<?php

function pagetop () {

    ?>
    <html lang="de">
    <head>
        <link rel="stylesheet" href="cccss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img  src="bilder/logo.png" width="130px" height="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li><a class="nav-item nav-link" href="impressum.php">Impressum</a></li>
                <li><a class="nav-item nav-link" href="datenschutz.php">Datenschutz</a></li>
            </ul>
        </ul>
        <a class="navbar-brand" href="profil.php"><img for="dropdown" src="bilder/icon_profil.png" width="50px" height="50px"></a>

        <form method="post" action="/index.php">
            <input  type="hidden" name="action" class="form-control" value="logout">
            <input style="margin-top: 10px" class="btn btn-outline-success" type="submit" name="submit" value="ausloggen">
        </form>
        </div>
    </nav>

    <?php
}

function pageheader(){
    ?>
    <html lang="de">
    <head>
        <link rel="stylesheet" href="cccss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <?php
    }

function navbar () {

    ?>
    <html lang="de">
    <head>
        <link rel="stylesheet" href="cccss.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img  src="bilder/logo.png" width="130px" height="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li><a class="nav-item nav-link" href="impressum.php">Impressum</a></li>
                <li><a class="nav-item nav-link" href="datenschutz.php">Datenschutz</a></li>
            </ul>
        </ul>
        <a class="navbar-brand" href="profil.php"><img for="dropdown" src="bilder/icon_profil.png" width="50px" height="50px"></a>

        <form method="post" action="/index.php">
            <input  type="hidden" name="action" class="form-control" value="logout">
            <input style="margin-top: 10px" class="btn btn-outline-success" type="submit" name="submit" value="ausloggen">
        </form>
        </div>
    </nav>

    <?php
}

function navbarlogin() {

    ?>
    <html lang="de">
    <head>
        <link rel="stylesheet" href="cccss.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img  src="bilder/logo.png" width="130px" height="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li><a class="nav-item nav-link" href="impressum.php">Impressum</a></li>
                <li><a class="nav-item nav-link" href="datenschutz.php">Datenschutz</a></li>
            </ul>
        </ul>


        </div>
    </nav>

    <?php
}


function pagetopstatic () {

    ?>
    <html lang="de">
    <head>
        <link rel="stylesheet" href="cccss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img  src="bilder/logo.png" width="130px" height="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li><a class="nav-item nav-link" href="impressum.php">Impressum</a></li>
                <li><a class="nav-item nav-link" href="datenschutz.php">Datenschutz</a></li>
            </ul>
        </ul>
        <a href="javascript:history.back()">Go Back</a>
        </div>
    </nav>

    <?php
}


?>

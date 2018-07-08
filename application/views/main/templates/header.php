<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Välkommen till CityEl!</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel ="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/Footer-white.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top nav-background-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand" href="#">Project name</span>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Startsida</a></li>
                        <li><a href="#about">Om Oss</a></li>
                        <li><a href="<?php echo base_url() ?>pages/partners">Leverantörer</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                        <li><a href="#contact">Öppettider</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <style>
            body{
                font-family: 'Varela Round', sans-serif ;
                padding-top: 50px;
            }

            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
            .nav-background-color{
                background-color: #000;
            }
            .navbar-inverse .navbar-nav>li>a{
                color: #fff;
            }
            .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover,
            .navbar-inverse .navbar-brand:focus, .navbar-inverse .navbar-brand:hover {
                color: #9d9d9d;
            }
            .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
                background-color: #272626;

            }
            .navbar-inverse .navbar-brand {
                color: white;
            }

        </style>
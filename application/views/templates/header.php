<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>BETA</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url()?>assets/imgs/favicon.ico" /> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/custom.css" rel="stylesheet">
    </head>



 
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/teste">Home</a>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-item" data-toggle="dropdown" href="#">Projetos em iniciação
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($projetos as $nome): ?>
                            <li><a class="nav-link" href="/teste/index.php/novosprojectos/getprojeto/<?php echo $nome['id'] ?>"><?php echo $nome['nome'] ?></a></li>
                        <?php endforeach; ?>

                    </ul>
                </li>
                <li><a class="nav-link" href="#">Histórico</a></li>
                <li><a class="nav-link" href="/teste/index.php/contactos">Contactos</a></li>
                </li>
            </ul>
        </div>
    </nav>
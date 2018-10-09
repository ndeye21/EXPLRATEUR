<?php
    //  require 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>FILE EXPLORER</title>
    
    <style>
        td a {
            display: inline-block;
        }
        .action_btn a:hover {
            background-color: #ffffff;
        }
    </style>

</head>

<body style="width: 100%; height: 100%">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container">
        <p><a href="?p=add" class="btn btn-primary">New File</a></p>
        <table style="width: 100%" class="table table-striped table-hover">
            <tr>
                <th>Nom</th>
                <th width="320">Action</th>
             </tr>
            <?php

                require_once 'post.php';
                show_folders("C:/wamp64/www/");

            ?>
        </table>

    </div>  

    <!-- script files -->
    <script src="public/js/jQuery.js"></script>

</body>
</html>
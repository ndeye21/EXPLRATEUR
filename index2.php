<?php

require 'vendor/autoload.php';

//twig config
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

$twig = new Twig_Environment($loader, [
    'cache' => false, //__DIR__ . '/tmp',
]);

echo $twig->render('home.twig', ['nom' => 'Aliou']);
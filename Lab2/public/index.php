<?php
require_once '../vendor/autoload.php';
require_once "../controllers/MainTwigController.php";

$loader = new \Twig\Loader\FilesystemLoader('../views');

$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

$routes = [
    "/" => new MainTwigController($twig),
    "/anime" => new MainTwigController($twig),
    "/manga" => new MainTwigController($twig)
];

$routes[$url]->render();
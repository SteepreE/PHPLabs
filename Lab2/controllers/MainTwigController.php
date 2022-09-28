<?php

require_once "TwigController.php";

class MainTwigController extends TwigController{
    protected $title = "Главная страница";
    protected $template = "main.twig";
}
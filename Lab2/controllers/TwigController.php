<?php
require_once "Controller.php";

class TwigController implements IController {
    protected $title = "";
    protected $template = "";

    protected \Twig\Environment $twig;

    public function __construct($twig) {
        $this->twig = $twig;
    }

    public function getContext() {
        $context["title"] = $this->title;
        return $context;
    }

    public function render() {
        echo $this->twig->render($this->template, $this->getContext());
    }
}
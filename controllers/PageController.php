<?php

class PageController {

    public function index($view ) {
        $view->render("Hompage");
    }

    public function folder1($view ) {
        $view->render("folder1");
    }

    public function folder2($view ) {
        $view->render("folder2");
    }
}

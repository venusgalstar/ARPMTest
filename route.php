<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';

require_once 'controllers/PageController.php';
$controller = new PageController();

require_once 'views/View.php';
$view = new View();

switch ($url) {
    case '':
        $controller->index($view );
        break;
    case 'folder1':
        $controller->folder1($view );
        break;
    case 'folder2':
        $controller->folder2($view );
        break;
    default:
        // Handle 404 or redirect to the homepage
        $controller->index();
        break;
}

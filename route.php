<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';

require_once 'controllers/PageController.php';
$controller = new PageController();

switch ($url) {
    case '':
        $controller->index();
        break;
    case 'folder1':
        $controller->folder1();
        break;
    case 'folder2':
        $controller->folder2();
        break;
    default:
        // Handle 404 or redirect to the homepage
        $controller->index();
        break;
}

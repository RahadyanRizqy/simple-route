<?php
$uri = $_SERVER["REQUEST_URI"];
switch ($uri) {
    case '/about':
        include 'subview/about.php';
        break;
    case '/contact':
        include 'subview/contact.php';
        break;
    case '/home':
        include 'subview/home.php';
        break;
    default:
        include 'subview/else.php';
        break;
}
?>
<?php
    include './app/Router/Router.php';
    
    /* (Homepage) route */ 
    $router->get('/', function () {
        include './views/Homepage.php';
    });
    
    /* (About Us ) route */ 
    $router->get('/about', function () {
        include './views/About.php';
    });
?>
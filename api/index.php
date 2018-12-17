<?php

    header('Content-Type: application/json');

    // Database Configurations
    include '../app/config/database.php'; 
    // Router Configurations
    include '../app/router/router.php'; 
    // Include Configurations
    include '../app/config/app.php'; 


    // Test Route
    $router->get(API_VERSION.'/test', function () {
        // $instance = new Instance();
        // $instance->auth($_POST);
        echo json_encode(array('message'=>'Hello World'));
    });
    
    // Run router
    $router->run();
?>
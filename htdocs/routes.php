<?php

$router->get('' , 'controllers/index.php');
$router->get('home' , 'controllers/index.php');


$router->post('uploadFile', 'controllers/UploadFile.php');
$router->get('select', 'controllers/select.php');

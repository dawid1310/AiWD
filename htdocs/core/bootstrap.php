<?php
function dd($var){
    die(var_dump($var));
}
$app = [];
$app['config'] = require 'config.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/UploadedData.php';
$dataObj = new UploadedData();


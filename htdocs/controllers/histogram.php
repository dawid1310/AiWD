<?php
$choicecolumn = $_POST['column'];
error_reporting(E_ALL & ~E_NOTICE);
$dataObj= unserialize($_SESSION["dataObj"]);
$column = $dataObj->get_column($choicecolumn);
$i = 0;
foreach($column as $row){
    $column[$i] *= 1.0;
    $i++;
}
require 'views/histogram.view.php';
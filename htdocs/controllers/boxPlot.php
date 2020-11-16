<?php
$choicecolumn = $_POST['column'];
$dataObj= unserialize($_SESSION["dataObj"]);
$data = $dataObj->get_data();
$outno = count($data[0])-1;
$axisX = $dataObj->get_column($outno);
$axisX = array_unique($axisX);
sort($axisX);

$axisY = [];
foreach($axisX as $element){
    $tmp = [];
    foreach($data as $row){
        if(end($row)==$element){ 
            $tmp[] = $row[$choicecolumn];
        }       
        
    }  
    $axisY[]=$tmp; 
}
$noelaxisY=count($axisY);

require 'views/boxPlot.view.php';

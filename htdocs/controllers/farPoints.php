<?php
$column = $_POST["column"];
$dataObj = unserialize($_SESSION["dataObj"]);
$data = $dataObj->get_data();
$quartile25 = $dataObj->get_quartile25();
$quartile75 = $dataObj->get_quartile75();
$iqr = $dataObj->get_iqr();
$heads = $dataObj->get_heads();

$low = $quartile25[$column] - 1.5 * $iqr[$column];;
$high = $quartile75[$column] + 1.5 * $iqr[$column];
$low_point = [];
$high_point = [];
$i = 0;
foreach ($data as $row) {
    if ($row[$column] < $low) {
        $low_point[$i] = $row;
        $i++;
    } else if ($row[$column] > $high) {
        $high_point[$i] = $row;
        $i++;
    }
}

require "views/farPoints.view.php";
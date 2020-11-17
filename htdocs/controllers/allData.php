<?php
$dataObj = unserialize($_SESSION["dataObj"]);
$data = $dataObj->get_data();
$heads = $dataObj->get_heads();
require "views/allData.view.php";

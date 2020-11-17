<?php
$dataObj = unserialize($_SESSION["dataObj"]);
$heads = $dataObj->get_heads();
$page = $_GET['page'];
require "views/choicecolumn.view.php";
<?php

if (isset($_POST['kwadrat'])) {
    $bokKwadrat = $_POST['kwadrat']; 
    $kwadrat = new Kwadrat();
    $kwadrat->getFromUser($bokKwadrat);
    $kwadrat->LoadToDBOBJ($app);
}

if (isset($_POST['prostokat1']) && isset($_POST['prostokat2'])) {
    $bokProstokat1 = $_POST['prostokat1']; 
    $bokProstokat2 = $_POST['prostokat2']; 
    $prostokat = new Prostokat();
    $prostokat->getFromUser($bokProstokat1, $bokProstokat2);
    $prostokat->LoadToDBOBJ($app);
}
if (isset($_POST['kolo'])) {
    $promien = $_POST['kolo']; 
    $kolo = new Kolo();
    $kolo->getFromUser($promien);
    $kolo->LoadToDBOBJ($app);
}
if (isset($_POST['trojkat1'])&&isset($_POST['trojkat2'])&&isset($_POST['trojkat3'])) {
    $bokTrojkat1 = $_POST['trojkat1']; 
    $bokTrojkat2 = $_POST['trojkat2']; 
    $bokTrojkat3 = $_POST['trojkat3']; 
    $trojkat = new Trojkat();
    $trojkat->getFromUser($bokTrojkat1, $bokTrojkat2, $bokTrojkat3);
    $trojkat->LoadToDBOBJ($app);
}
if (isset($_POST['pieciokat'])) {
    $bokPieciokat = $_POST['pieciokat']; 
    $pieciokat = new Pieciokat();
    $pieciokat->getFromUser($bokPieciokat);
    $pieciokat->LoadToDBOBJ($app);
}
if (isset($_POST['szesciokat'])) {
    $bokSzesciokat = $_POST['szesciokat']; 
    $szesciokat = new Szesciokat();
    $szesciokat->getFromUser($bokSzesciokat);
    $szesciokat->LoadToDBOBJ($app);
}
require 'views/addOBJ.view.php';
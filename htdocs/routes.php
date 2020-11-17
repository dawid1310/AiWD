<?php

$router->get('' , 'controllers/index.php');
$router->get('home' , 'controllers/index.php');
$router->get('stats' , 'controllers/stats.php');
$router->post('uploadFile', 'controllers/UploadFile.php');
$router->get('menu' , 'controllers/menu.php');
$router->post('menu', 'controllers/menu.php');
$router->get('farPoints' , 'controllers/farPoints.php');
$router->post('farPoints', 'controllers/farPoints.php');
$router->get('choicecolumn' , 'controllers/choicecolumn.php');
$router->post('choicecolumn', 'controllers/choicecolumn.php');
$router->get('pearsonCorrelation' , 'controllers/pearsonCorrelation.php');
$router->post('pearsonCorrelation', 'controllers/pearsonCorrelation.php');
$router->get('linearRegression' , 'controllers/linearRegression.php');
$router->post('linearRegression', 'controllers/linearRegression.php');

$router->get('choicecolumn', 'controllers/choicecolumn.php');
$router->get('choicetwocolumns', 'controllers/choicetwocolumn.php');

$router->get('visualisation', 'controllers/visualisation.php');


$router->get('variableValues', 'controllers/variableValues.php');
$router->get('histogram', 'controllers/histogram.php');
$router->get('boxPlot', 'controllers/boxPlot.php');
$router->get('scatterplot', 'controllers/scatterplot.php');
$router->post('variableValues', 'controllers/variableValues.php');
$router->post('histogram', 'controllers/histogram.php');
$router->post('boxPlot', 'controllers/boxPlot.php');
$router->post('scatterplot', 'controllers/scatterplot.php');
$router->get('allData', 'controllers/allData.php');
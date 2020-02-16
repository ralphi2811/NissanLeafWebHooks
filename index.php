<?php

require_once 'NissanConnect.class.php';

$action = $_GET['action'];
$param = $_GET['param'];

if ($param = 'clim') {
 
    switch ($action) {
        case 'on':
            echo 'Allumage de la clim';
            break;
            
        case 'off':
            echo 'Extinction de la clim';
            break;
            
        default :
            echo 'Parametre incorrect';
        }
    
}


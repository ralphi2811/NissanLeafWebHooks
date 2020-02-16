<?php

require_once 'NissanConnect.class.php';
require_once 'config/nissanlogin.php';

$UserLogin = new NissanLogin();
$nissanConnect = new NissanConnect($UserLogin->Login(), $UserLogin->Password(), 'America/New_York', NissanConnect::COUNTRY_EU, NissanConnect::ENCRYPTION_OPTION_OPENSSL);

$action = $_GET['action'];
$param = $_GET['param'];
$waitForResult = FALSE; 

if ($param === 'clim') {
 
    switch ($action) {
        case 'on':
            $nissanConnect->startClimateControl($waitForResult);
            echo 'Allumage de la clim';
            break;
            
        case 'off':
            $nissanConnect->stopClimateControl($waitForResult);
            echo 'Extinction de la clim';
            break;
            
        default :
            echo 'Parametre incorrect';
            break;
        }
    
} elseif ($param === 'status') {
    
    $result = $nissanConnect->getStatus();
    echo var_dump($result);

}


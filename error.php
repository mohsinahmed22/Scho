<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/11/2018
 * Time: 2:57 PM
 */

include 'admin365/core/init.php';



$error = new DisplayErrors();
$e = 100;
if($e >= 210){
    $error->DisplayMessage('This is testing Success message', 'Sucecss');
}else{
    $error->DisplayMessage('This is testing Error message');
}


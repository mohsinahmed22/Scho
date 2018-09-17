<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/13/2018
 * Time: 11:42 AM
 */

include 'admin365/core/init.php';

if(isset($_GET['school'])){
    $template = new Templates('templates/register.php');
}elseif(isset($_GET['teachers'])){
    $template = new Templates('templates/register_teacher.php');
}elseif(isset($_GET['parenting'])){
    $template = new Templates('templates/register_parents.php');
}elseif(isset($_POST)){
    $template = new Templates('templates/thankyou.php');

}


echo $template;
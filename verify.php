<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 10/12/2018
 * Time: 12:08 PM
 */

include 'admin365/core/init.php';



$template = new Templates('templates/verifyemail.php');

if(isset($_GET['email']) and !empty($_GET['email']) and $_GET['verify'] and !empty($_GET['verify'])){
    $user = new User();
    $confirm_email = $user->confirmEmail($_GET['email'], $_GET['verify']);

}else{
    $template = new Templates('templates/i.php');
}








echo $template;
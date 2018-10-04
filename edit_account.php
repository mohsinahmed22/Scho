<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';

$template = new Templates('templates/edit_account_info.php');

$user = new User();
$uid = 16;
$school_id= 1;
$template->userinfo = $user->getUserInfo($uid);

if(isset($_POST['update_UserAccount'])){
    $UserInfo = $user->UpdateAccountInfo($_POST, $uid);
}
if(isset($_POST['update_UserPassword'])){
    if($_POST['password'] == $_POST['confirmpassword']){
        $UserPassword =  $user->updatePassword($_POST, $uid);
    }
}

echo $template;
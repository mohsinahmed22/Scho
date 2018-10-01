<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';

$template = new Templates('templates/edit_acount_info.php');

$user = new User();
$uid = 16;
$school_id= 1;
$template->userinfo = $user->getUserInfo($uid);

echo $template;
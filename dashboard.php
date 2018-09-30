<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';

$template = new Templates('templates/school_dashboard.php');

$user = new User();
$uid = 16;

$template->userinfo = $user->getUserInfo($uid);

echo $template;
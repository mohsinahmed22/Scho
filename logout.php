<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 11/25/2018
 * Time: 1:08 PM
 */

include 'admin365/core/init.php';

$user = new User();
$user->logout();
redirect('index.php');
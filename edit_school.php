<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';

$template = new Templates('templates/edit_school_info.php');

$user = new User();
$uid = 16;
$school_id= 1;
$template->userinfo = $user->getUserInfo($uid);

if(isset($_POST['update_UserSchool'])){

    $School = new User();
    if(!isset($_POST['school_special_child'])){
        $_POST['school_special_child'] = 0;
    }
    if(!isset($_POST['school_main_campus'])){
        $_POST['school_main_campus'] = 0;
    }
    if(!isset($_POST['school_branches'])){
        $_POST['school_branches'] = 0;
    }
    if($UpdateSchool = $School->UpdateSchoolInfo($_POST)){
        redirect('edit_school.php');
    }

}

echo $template;
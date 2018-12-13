<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';
if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
    $user_type = $_SESSION['user_type'];
}else{
    redirect(BASE_URI . 'login');
}




if($user_type == "school"):
    $template = new Templates('templates/edit_school_info.php');
elseif($user_type == "teacher"):
    $template = new Templates('templates/edit_teacher_profile_info.php');

else:
    $template = new Templates('templates/edit_school_info.php');
endif;


$user = new User();
$template->userinfo = $user->getUserInfo($uid, $user_type);
if($user_type == "teacher"):
    $template->qualificaitons = $user->getQualification($template->userinfo[0]->id);
    $template->expe  = $user->getExperience($template->userinfo[0]->id);
    endif;
if(isset($_POST['update_UserSchool'])){
//    print_r($_POST);
    if($user_type == "school"):

        if(!isset($_POST['school_special_child'])){
            $_POST['school_special_child'] = 0;
        }
        if(!isset($_POST['school_main_campus'])){
            $_POST['school_main_campus'] = 0;
        }
        if(!isset($_POST['school_branches'])){
            $_POST['school_branches'] = 0;
        }
        if($user->UpdateSchoolInfo($_POST)){
            redirect(BASE_URI . $_GET['type'] . '/edit/profile');
        }

    endif;

    if($user_type == "teacher"):

        if($user->UpdateTeacheInfo($_POST)){
            redirect(BASE_URI . $_GET['type'] . '/edit/profile');
        }
    endif;



}

echo $template;
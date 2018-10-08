<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/13/2018
 * Time: 11:42 AM
 */

include 'admin365/core/init.php';
if(isset($_POST['login_form'])){
        $UserLogin = new User();
        if($UserLogin->login($_POST)){
            redirect('dashboard.php');
        }else{
            redirect('index.php');
        }

}
if(isset($_GET['school'])){
    $template = new Templates('templates/register.php');
}elseif(isset($_GET['teachers'])){
    $template = new Templates('templates/register_teacher.php');
}elseif(isset($_GET['parenting'])){
    $template = new Templates('templates/register_parents.php');
}elseif(isset($_POST['submit'])){
    if($_POST['user_type'] == 'school'){
        $school = new Schools();
        if($school->register($_POST)){
            $uid = $school->register_user_id();
        }
    }elseif($_POST['user_type'] == 'teacher'){
        $teacher = new Teachers();
        if($teacher->register($_POST)){
            $uid = $teacher->register_user_id();
        }
    }else{
        $user = new User();
        if($user->register($_POST)){
            $uid = $user->register_user_id();
        }

    }
    $template = new Templates('templates/thankyou.php');



}else{
    $template = new Templates('templates/login.php');
}


echo $template;
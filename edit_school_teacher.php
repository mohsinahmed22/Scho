<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';

$template = new Templates('templates/Backend/Schools/edit_teacher_info.php');
if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
    $user_type = $_SESSION['user_type'];
}else{
    redirect(BASE_URI . 'login');
}


$user = new User();
if(isset($_SESSION['uid'])){


$uid = $_SESSION['uid'];

$template->userinfo = $user->getUserInfo($uid,$user_type);
$school_id= $template->userinfo[0]->school_profile_id;
$template->teachers = $user->getSchoolteachers($school_id);
if(isset($_POST['searchSchool_teacher'])){
    $searchText = $_POST['search_teachers'];
    $search = new Search();

    $searchResults = $search->searchSchoolTeachers($searchText);
    if(!empty($searchResults)){
        $template->searchResults = $searchResults;
    }
}
if(isset($_GET['tid'])){
        $user->AddteacherToSchool($_GET['tid'],$school_id, $_GET['uid']);
        redirect(BASE_URI . $_GET['type']. '/teachers');

}
if(isset($_GET['delete'])){
        $user->deleteSchoolTeacher($_GET['delete']);
        redirect(BASE_URI . $_GET['type']. '/teachers');
}

echo $template;


}else{
    redirect(BASE_URI . 'login');
}
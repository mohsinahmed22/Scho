<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';

$template = new Templates('templates/edit_teacher_info.php');

$user = new User();
$uid = 16;
$school_id= 1;
$template->userinfo = $user->getUserInfo($uid);
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
        redirect('edit_school_teacher.php');

}
if(isset($_GET['delete'])){
        $user->deleteSchoolTeacher($_GET['delete']);
        redirect('edit_school_teacher.php');
}


echo $template;
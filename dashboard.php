<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';
$user = new User();
if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
    $user_type = $_SESSION['user_type'];
}else{
    redirect(BASE_URI . 'login');
}

if($user->is_loggedin()){
    if($_SESSION['user_type'] == 'school'){
        $school_user = new Schools();

        $template = new Templates('templates/school_dashboard.php');
        $template->userinfo = $school_user->getUserInfo($uid,$user_type);
        $school_id= $template->userinfo[0]->school_profile_id;
        /**
         * Rating
         */
        $rating = new  Rating();
        $template->allReviews = $rating->selectUserInfo($school_id);
        $template->schoolRating = $rating->getSchoolrating($school_id);
        $template->schoolOverAllRating = $rating->selectOverAllRating($school_id);
        $template->calculateRatingbar = $rating->calculateRating($school_id);
        $template->overAllRatingCount = count($template->schoolOverAllRating);

    }elseif($_SESSION['user_type'] == 'teacher'){
        $teacher_user = new Teachers();

        $template = new Templates('templates/teacher_dashboard.php');
        $template->userinfo = $teacher_user->getUserTeacherInfo($uid);
        $teacher_id = $template->userinfo[0]->id;
        /**
         * Rating
         */
        $rating = new  Rating();
        $template->allReviews = $rating->selectTeacherInfo($teacher_id);
        $template->teacherRating = $rating->getTeacherating($teacher_id);
        $template->teacherOverAllRating = $rating->selectOverAllRatingTutor($teacher_id);
        $template->calculateRatingbar = $rating->calculateRating($teacher_id);
        $template->overAllRatingCount = count($template->teacherOverAllRating);

    }else{
        $template = new Templates('templates/parent_dashboard.php');
    }


}else{
    redirect('register.php');

}




echo $template;
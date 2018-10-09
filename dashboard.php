<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';
$user = new User();
if($user->is_loggedin()){
    if($_SESSION['user_type'] == 'school'){
        $school_user = new Schools();
        $uid = $_SESSION['uid'];
        $template = new Templates('templates/school_dashboard.php');
        $template->userinfo = $school_user->getUserInfo($uid);
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
        $template = new Templates('templates/teacher_dashboard.php');
    }else{
        $template = new Templates('templates/parent_dashboard.php');
    }


}else{
    redirect('register.php');

}




echo $template;
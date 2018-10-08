<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/30/2018
 * Time: 5:21 PM
 */

include 'admin365/core/init.php';
$uid = 16;

if($user->is_loggedin()){
    if($_SESSION['user_type'] == 'school'){
        $user = new Schools();

        $template = new Templates('templates/school_dashboard.php');

        $school_id= 1;
        $template->userinfo = $user->getUserInfo($uid);
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
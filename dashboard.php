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




echo $template;
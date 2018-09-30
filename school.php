<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/21/2018
 * Time: 11:38 AM
 */
include 'admin365/core/init.php';


$template = new Templates('templates/school_home.php');
/*
 * School Profile
 */
$user = new User();
$school_id = 1;
$uid = 11;
$template->school = $user->getSchool($school_id);


/*
 * School Rating Never Rated before
 */
$rating = new Rating();
$template->rating_question = $rating->select_all_rating_questions();
$template->schoolRating = $rating->getSchoolrating($school_id);
$template->schoolOverAllRating = $rating->selectOverAllRating($school_id);
$template->calculateRatingbar = $rating->calculateRating($school_id);
$template->overAllRatingCount = count($template->schoolOverAllRating);

/*
 * Checking user Have rated before
 */

if($rating->checkUserRating($uid,$school_id)){
    $template->user_school_rated = $rating->checkUserRating($uid,$school_id);
}

/*
 * Facebook Page
 */
$fb_page_id = $template->school[0]->fb_pageid;
$template->profile_photo_src = "https://graph.facebook.com/{$fb_page_id}/picture?type=square&&height=200";
$access_token = $template->school[0]->fb_page_acesskey;
$fields = "id,message,picture,link,name,description,type,icon,created_time,from,object_id";
$limit = 15;
$json_link = "https://graph.facebook.com/{$fb_page_id}/feed?access_token={$access_token}&fields={$fields}&limit={$limit}";
$json = file_get_contents($json_link);
$obj = json_decode($json, true);
$template->obj = $obj;
$template->fb_page_id = $fb_page_id;
$template->fd_count = count($obj['data']);


/**
 * Submitting Ratings
 */
if(isset($_POST['review_rating'])){
    $rating_review = new Rating();
    $add_rating = $rating_review->addAllRating($_POST);
}



echo $template;
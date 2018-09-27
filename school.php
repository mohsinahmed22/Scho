<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/21/2018
 * Time: 11:38 AM
 */
include 'admin365/core/init.php';


$template = new Templates('templates/school_home.php');
$user = new User();
$template->school = $user->getSchool(1);
$rating = new Rating();
$template->rating_question = $rating->select_all_rating_questions();
$template->schoolRating = $rating->getSchoolrating(1);
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

if(isset($_POST['review_rating'])){
    $rating_review = new Rating();
    $add_rating = $rating_review->addAllRating($_POST);
}



echo $template;
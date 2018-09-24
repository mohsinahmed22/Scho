<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/21/2018
 * Time: 11:38 AM
 */
include 'admin365/core/init.php';


$template = new Templates('templates/school_home.php');
$rating = new Rating();
$template->rating_question = $rating->select_all_rating_questions();



echo $template;
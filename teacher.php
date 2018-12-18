<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/21/2018
 * Time: 11:38 AM
 */
include 'admin365/core/init.php';

$template = new Templates('templates/Teachers/teacher_home.php');

/**
 * Teacher Profile
 */
$user = new User()  ;
$teahcer_id = $_GET['id'];
$template->teacher = $user->getTeacher($teacher_id);
$tuid = $template->teacher[0]->user_id;
page_counter($tuid, $teacher_id);



echo $template;
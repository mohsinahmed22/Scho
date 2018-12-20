<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/20/2018
 * Time: 12:10 PM
 */
include 'admin365/core/init.php';

$template = new Templates('templates/Jobs/jobs_home.php');
$job = new Jobs();
$template->schooljobs  = $job->getAllJobs();

echo $template;
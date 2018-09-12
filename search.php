<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 2:52 PM
 */
include "admin365/core/init.php";

if(isset($_POST['keyword_srch'])){
    $search = new Search();
    if($_POST['search_type'] === 'schools'){
        $template = new Templates('templates/search_schools.php');
        $template->schools = $search->search_all_schools();
        $template->area = $_POST['search_area'];

    }elseif ($_POST['search_type'] == 'teachers'){

        $template = new Templates('templates/search_teachers.php');
        $template->tutors = $search->search_all_teachers();
        $template->keyword = $_POST['keyword_srch'];

    }elseif ($_POST['search_type'] == 'parenting'){
        $template = new Templates('templates/search_downloads.php');

    }else{
        $template = new Templates('templates/search.php');
    }

}




echo $template;
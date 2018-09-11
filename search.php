<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 2:52 PM
 */
include "admin365/core/init.php";

if(isset($_POST['keyword_srch'])){
    if($_POST['search_type'] === 'schools'){
        $template = new Templates('templates/search_schools.php');
        $search = new Search();
        $searchSchool = $search->search_schools($_POST['search_area']);


    }elseif ($_POST['search_type'] == 'teachers'){
        $template = new Templates('templates/search_teachers.php');

    }elseif ($_POST['search_type'] == 'parenting'){
        $template = new Templates('templates/search_downloads.php');

    }else{
        $template = new Templates('templates/search.php');
    }

}




echo $template;
<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/12/2018
 * Time: 11:42 AM
 */

include 'admin365/core/init.php';
$template = new Templates('templates/page.php');

$page = new Pages();
$displayPage = $page->SelectPageByUrl($_GET['page_url']);
if(!empty($displayPage)){
    $template->displayPage = $displayPage;

}else{
    redirect("404.php");
}

echo  $template;






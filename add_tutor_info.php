<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/9/2018
 * Time: 12:22 PM
 */

include 'admin365/core/init.php';
$user = new User();
if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
    $user_type = $_SESSION['user_type'];
}else{
    redirect(BASE_URI . 'login');
}



if($user->is_loggedin()){
    $template = new Templates('templates/Backend/Teachers/add_qualification.php');

   $template->userinfo = $user->getUserInfo($uid, $user_type);
    if(isset($_GET['qid']) && $_GET['action_type'] == 'qualification'){
       $template->qualification = $user->GetQualificationById($_GET['qid']);


   }elseif(isset($_GET['qid']) && $_GET['action_type'] == 'experience'){
        $template->experience = $user->GetExpeById($_GET['qid']);
    }


    /**
     * Add Qualification & Experience
     */
    if(isset($_POST['qualification_add'])){
        $qualification = new User();
        $add_qualification = $qualification->addQualification($_POST);
    }elseif(isset($_POST['experience_add'])){
        $pexp = new User();

        $add_pexp = $pexp->addExperience($_POST);
    }

    /**
     * Edit Qualification & Experience
     */
    if(isset($_POST['qualification_edit'])){
        $qualification = new User();
        $edit_qualification = $qualification->editQualification($_POST);
    }elseif(isset($_POST['experience_edit'])){
        $pexp = new User();
        $edit_pexp = $pexp->editExperience($_POST);
    }
    echo $template;

}




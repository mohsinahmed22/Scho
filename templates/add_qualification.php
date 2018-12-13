<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/21/2018
 * Time: 11:38 AM
 */
include '../includes/header.php'; ?>
<style>
    /* Note: Try to remove the following lines to see the effect of CSS positioning */
    .affix {
        top: 100px;
        z-index: 2 !important;
        position: fixed;
    }
    footer{position: relative;
        z-index: 10;}
</style>
<div class="home kpsg-schools">
    <?php  include "../includes/login_user_head.php"?>
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
                    foreach($crumbs as $crumb){
                        echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' > ');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="kpsg-page">
        <?php //print_r($school)?><?php //echo  $school->?>
        <form id="regForm" action=" <?php echo BASE_URI ?><?php echo $_GET['type'] ?>/<?php echo $_GET['action_type'] ?>/<?php echo $_GET['atc'] ?><?php echo (isset($_GET['tid']))? '/'.$_GET['tid'] : '' ; ?>" method="post">
            <div class="container">
            <?php if($_GET['action_type'] == 'qualification'): ?>
                <div class="row">
                    <div class="col-sm-8 sch-message">
                        <h2><?php echo ($_GET['atc'] == 'add')? 'Add' : "Edit" ;?> Qualification</h2>
                    </div>
                    <div class="col-sm-4 sch-bar">

                    </div>
                </div>
                <div class="row school-main" >
                    <div class="col-sm-2" >
                        <div class="head">
                            <h4>Qualification Information</h4>
                        </div>
                    </div>
                    <div class="col-sm-7">

                        <div class="row">
                            <div class="col">
                                <p><strong>Qualification Title:</strong></p>
                                <input placeholder="Title..." name="tutors_qualification_title"  class="form-control" <?php echo ($_GET['atc'] == 'add')? '' : "value='". $qualification[0]->tutors_qualification_title . "'";  ?>>
                                <p><small>Matriculation, Intermediate BSc. etc.</small></p>
                            </div>
                            <div class="col">
                                <p><strong>Completion Year:</strong></p>
                                <input placeholder="Title..." name="tutors_qualification_year"  class="form-control" <?php echo ($_GET['atc'] == 'add')? '' : "value='". $qualification[0]->tutors_qualification_year . "'" ;?>>
                                <p><small></small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p><strong>Description: <small>(Optional)</small></strong></p>
                                <textarea placeholder="Description..." name="tutors_qualification_description"  class="form-control" ><?php echo ($_GET['atc'] == 'add')? '' :  $qualification[0]->tutors_qualification_description ;?></textarea>
                                <p><small>You can type details and achivements or main subject etc.</small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="hidden" value="<?php  echo (isset($_GET['qid']))? $qualification[0]->id : $userinfo[0]->id ;?>" name="<?php  echo (isset($_GET['qid']))? 'qid' : 'tid'; ?>">
                                <hr/>
                                <button type="submit" name="qualification_<?php echo ($_GET['atc'] == 'add')? 'add' : "edit"?>" class="btn btn-primary"> <?php echo ($_GET['atc'] == 'add')? 'Add' : "Edit" ;?> Qualificaiton</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-sm-8 sch-message">
                        <h2><?php echo ($_GET['atc'] == 'add')? 'Add' : "Edit" ;?> Professional Experience</h2>
                    </div>
                    <div class="col-sm-4 sch-bar">

                    </div>
                </div>
                <div class="row school-main" >
                    <div class="col-sm-2" >
                        <div class="head">
                            <h4>Experience Details</h4>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col">
                                <p><strong>Job Title:</strong></p>
                                <input placeholder="Job Title..." name="tutors_experience_job_title"  class="form-control" <?php echo ($_GET['atc'] == 'add')? '' : "value='". $experience[0]->tutors_experience_job_title . "'"  ;?>>
                                <p><small>Cordinator, Montessori Directress, Maths Teacher etc.</small></p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <p><strong>Company / School/ Academy:</strong></p>
                            <input placeholder="Company Name..." name="tutors_experience_job_company"  class="form-control" <?php echo ($_GET['atc'] == 'add')? '' : "value='". $experience[0]->tutors_experience_job_company . "'" ;?>>
                            <p><small>The City School Juahar Branch, Becon House Gulshan Campus etc.</small></p>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p><strong>Job Date:</strong></p>
                                <input type="text" placeholder="Job Date..." name="tutors_experience_job_date"  class="form-control" <?php echo ($_GET['atc'] == 'add')? '' : "value='". $experience[0]->tutors_experience_job_date . "'" ;?>>
                                <p><small>Month/Year </small></p>
                            </div>
                            <div class="col">
                                <p><strong>Currently Working:</strong></p>
                                <select name="tutors_experience_on_job"  class="form-control">
                                    <option value="Yes" selected>Yes, Working here</option>
                                    <option value="No">No, I left</option>
                                </select>
                                <p><small></small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p><strong>Description: <small>(Optional)</small></strong></p>
                                <textarea placeholder="Description..." name="tutors_experience_job_description"  class="form-control" ><?php echo ($_GET['atc'] == 'add')? '' :  $experience[0]->tutors_experience_job_description  ;?></textarea>
                                <p><small>You can type details and achivements or main subject etc.</small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="hidden" value="<?php  echo (isset($_GET['qid']))? $experience[0]->id : $userinfo[0]->id ;?>" name="<?php  echo (isset($_GET['qid']))? 'qid' : 'tid'; ?>">
                                <hr/>
                                <button type="submit" name="experience_<?php echo ($_GET['atc'] == 'add')? 'add' : "edit"?>" class="btn btn-primary"> <?php echo ($_GET['atc'] == 'add')? 'Add' : "Edit" ;?> Experience</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>

            <?php endif; ?>

        </div>
        </form>
    </div>
</div>

    <?php  include "../includes/footer.php";?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <script>
        $('#aa').popover();
    </script>
        </form>
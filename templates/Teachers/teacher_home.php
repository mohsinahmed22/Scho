<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/18/2018
 * Time: 5:49 PM
 */
include '../../includes/header.php'; ?>
<div class="home kpsg-teacher">
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 title-cont">
                    <?php // print_r($teacher)?>
                    <h1><?php echo $teacher[0]->tutor_name ;?> <span><a href="">Unverified</a><a id='aa' href="#" role="button" data-toggle="popover"  data-placement="top"  data-trigger="focus" title="This School has not cliamed its profile" data-content="School leaders - claim your school's profile to edit general information and share what makes your school unique. Learn more. "><i style="font-size:12px; opacity:.5; margin: 0 10px" class="fa fa-question" ></i></a></span></h1>
                    <div class="teacher-info">
                        <div class="school-area pull-left"><a href="#map"><?php echo $teacher[0]->tutor_gender ;?></a></div>
                        <div class="school-area pull-left"><a href="#map"><?php echo $teacher[0]->tutor_age ;?></a></div>
                        <div class="school-address pull-left"><i class="fa fa-map-marker"></i> <a href=""><?php echo $teacher[0]->tutor_address;?>, <?php echo $teacher[0]->tutor_city ;?> </a></div>
                        <div class="school-area pull-left"><a href="#map"><?php echo $teacher[0]->tutor_area ;?></a></div>
                        <div class="school-area pull-left"><a href="#map"><?php echo $teacher[0]->tutor_area ;?></a></div>
                        <div class="school-contact pull-left"><i class="fa fa-phone"></i> <a href="#">Contact Info</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_header_sub school-info-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 kpsg-rating-bar">
                        <div class="kpsg-ratings-ico pull-left">
                            10<small>/10</small>
                        </div>
                        <div class="kpsg-rating-title">
                            <small>New <i class="fa fa-question"></i></small><br/>
                            <h3><span>Karachi Private<br/> School Guide<br/></span>
                                Rating</h3>
                        </div>
                    </div>
                    <div class="col-sm-2 kpsg-review-bar  text-center">
                        <h3 ><span>Review</span></h3>
                    </div>
                    <div class="col-sm-2 kpsg-review-bar text-center" >
                        <h3><span>On Job</span></h3>
                        <h2><?php echo $teacher[0]->tutor_job_status ;?></h2>
                    </div>
                    <div class="col-sm-2 kpsg-review-bar  text-center">
                        <h3><span>Tuition Timing</span></h3>
                        <h2><?php echo $teacher[0]->tutor_tuition_timing ;?></h2>
                    </div>
                    <div class="col-sm-2 kpsg-review-bar text-center no-border">
                        <h3 class="text-center"><span>Where to Teach</span></h3>
                        <h2><?php  echo $teacher[0]->tutor_where_to_teach ?></h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
    <div class="kpsg-page kpsg-page-teacher">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 sch-message">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
                <div class="col-sm-4 sch-bar">
                    <ul class='list-inline' style="display: flex;">
                        <li class="text-center col-xs-12 col-sm-4"><a href="#"><i class="fa fa-pencil "></i><br/>Write Review</a></li>
                        <li class="text-center col-xs-12 col-sm-4"><a href="#"><i class="fa fa-heart "></i><br/>Save Teacher</a></li>
                        <li class="text-center col-xs-12 col-sm-4"><a href="#"><i class="fa fa-building "></i><br/>Teachers Nearby</a></li>
                    </ul>
                </div>
            </div>
            <div class="row teacher-main teacher-enve" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h3>Teacher Details</h3>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="container-info">
                        <h4><i class="fa fa-graduation-cap"></i> General information<br/><small style="font-weight: 200;">Detail information about, faculty, availablity and comfortablity etc.</small></h4>
                        <div class="container-box">
                            <div class="row">
                                <div class="col-sm-2"><h5>Description:</h5></div>
                                <div class="col-sm-10"><p><?php echo $teacher[0]->tutor_description ;?></p></div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Phone:</h5></div>
                                <div class="col-sm-10"><p><?php echo $teacher[0]->tutor_phone ;?></p></div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Email:</h5></div>
                                <div class="col-sm-10"><p><?php echo $teacher[0]->email ;?></p></div>

                            </div>
                            <?php if(!empty($teacher[0]->tutor_facebook_link)):?>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-2"><h5>Facebook:</h5></div>
                                    <div class="col-sm-10"><p><a href="<?php echo $teacher[0]->tutor_facebook_link ;?>"> Page link</a> <span class="pull-right"><i class="fa fa-thumbs-up"></i>  Like </span></p> </div>

                                </div>
                            <?php endif; ?>
                            <?php if(!empty($teacher[0]->tutor_linkedin )):?>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-2"><h5>Twitter:</h5></div>
                                    <div class="col-sm-10"><p><a href="<?php echo $teacher[0]->tutor_linkedin ;?>"> Page link</a> <span class="pull-right"><i class="fa fa-twitter"></i>  Follow us </span></p> </div>

                                </div>
                            <?php endif; ?>

                            <div class="unclaimed-message">
                                <ul style="list-style:circle; padding-left:10px;"><li><strong>Are you an administrator at this school?</strong>
                                        Claim your school’s profile to edit general information and share what makes your school unique.
                                        <a href="#">Learn more</a>.</li>

                                    <li><strong>Are you a parent or student at this school?</strong>
                                        <a href="#">Encourage school administrators</a> to claim this school’s profile.</li></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="row teacher-main teacher-enve" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h3>Qualification</h3>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="container-info">
                        <h4><i class="fa fa-graduation-cap"></i> Teacher Qualification<br/><small style="font-weight: 200;">Detail summary about teacher of his qualification and additional qualification</small></h4>
                        <div class="container-box">
                            <?php  if(!empty($qualification)): ?>
                                <div class="row">
                                    <div class="col-sm-2"><h5>Qualification:</h5></div>
                                    <div class="col-sm-10">
                                        <?php foreach ($qualification as $q): ?>
                                            <p><strong><?php echo $q->tutors_qualification_title; ?></strong> <span class="pull-right"><i class="fa fa-calendar"></i> <?php echo $q->tutors_qualification_year; ?> </a></span></p>
                                            <p><?php echo $q->tutors_qualification_description; ?></p>
                                            <hr>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php  else: ?>
                                <div class="row">
                                    <div class="col-sm-2"><h5>Qualification:</h5></div>
                                    <div class="col-sm-10">
                                        <strong>No Qualification Added</strong>
                                        <p></p>
                                    </div>
                                </div>
                            <?php  endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="row teacher-main teacher-enve" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h3>Professional Experience</h3>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="container-info">
                        <h4><i class="fa fa-graduation-cap"></i> Teacher Experience<br/><small style="font-weight: 200;">detail summary about his professional experence</small></h4>
                        <div class="container-box">
                            <?php  if(!empty($exp)): ?>
                                <div class="row">
                                    <div class="col-sm-2"><h5>Qualification:</h5></div>
                                    <div class="col-sm-10">
                                        <?php foreach ($exp as $e): ?>
                                            <h4><?php echo $e->tutors_experience_job_company; ?></h4>
                                            <p><strong><?php echo $e->tutors_experience_job_title; ?></strong> <span class="pull-right"><i class="fa fa-calendar"></i> <?php echo $e->tutors_experience_job_date; ?> </a></span></p>
                                            <p><?php echo $e->tutors_experience_job_description; ?></p>
                                            <hr>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php  else: ?>
                                <div class="row">
                                    <div class="col-sm-2"><h5>Teacher Experience:</h5></div>
                                    <div class="col-sm-10">
                                        <strong>No Professional Experience Added</strong>
                                        <p></p>
                                    </div>
                                </div>
                            <?php  endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>

        </div>




    </div>

</div>


<?php  include "../../includes/footer.php";?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>
    $('#aa').popover();
</script>
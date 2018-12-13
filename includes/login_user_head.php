<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 10/2/2018
 * Time: 12:23 PM
 */?>
<div class="top_header">

        <?php if($_SESSION['user_type'] == 'school'): ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 title-cont">
                <h1><?php echo $userinfo[0]->first_name . " " .  $userinfo[0]->last_name ;?> <small style="font-size:14px;">(<strong>Username:</strong> <?php echo $userinfo[0]->email ;?>)</small> <span></h1>
                <div class="school-info">
                    <div class="school-address pull-left"><i class="fa fa-map-marker"></i> <a href=""><?php echo $userinfo[0]->school_address ;?>, <?php echo $userinfo[0]->school_city ;?> </a></div>
                    <div class="school-area pull-left"><a href="#map"><?php echo $userinfo[0]->school_area ;?></a></div>
                    <div class="school-contact pull-left"><i class="fa fa-pencil"></i> <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/edit/profile">Edit Information</a></div>
                    <div class="school-contact pull-left"><i class="fa fa-eye"></i> <a href="#">View Profile</a></div>
                </div>
            </div>
            </div>
        </div>
            <div class="top_header_sub school-info-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php  include "admin-nav.php"?>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif ($_SESSION['user_type'] == 'teacher'):?>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 title-cont">
                        <h1><?php echo ucwords($userinfo[0]->tutor_name)?> <small style="font-size:14px;">(<strong>Username:</strong> <?php echo $userinfo[0]->email ;?>)</small> <span></h1>
                        <div class="school-info">
                            <div class="school-address pull-left"><i class="fa fa-map-marker"></i> <?php echo $userinfo[0]->tutor_area ;?>, <?php echo $userinfo[0]->tutor_city ;?></div>
                            <div class="school-area pull-left"><i class="fa fa-briefcase"></i> <?php echo $userinfo[0]->tutor_where_to_teach ;?></div>
                            <div class="school-area pull-left"><i class="fa fa-clock-o"></i> <?php echo $userinfo[0]->tutor_tuition_timing ;?></div>
                            <div class="school-area pull-left"><a href="<?php echo $userinfo[0]->tutor_facebook_link ;?>"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;<a href="<?php echo $userinfo[0]->tutor_linkedin ;?>"> <i class="fa fa-linkedin"></i></a></div>
                            <div class="school-contact pull-left"><i class="fa fa-pencil"></i> <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/edit/profile">Edit Information</a></div>
                            <div class="school-contact pull-left"><i class="fa fa-eye"></i> <a href="#">View Profile</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top_header_sub school-info-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php  include "admin-nav.php"?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>




</div>

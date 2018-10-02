<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 10/2/2018
 * Time: 12:23 PM
 */?>
<div class="top_header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-cont">
                <h1><?php echo $userinfo[0]->first_name . " " .  $userinfo[0]->last_name ;?> <small style="font-size:14px;">(<strong>Username:</strong> <?php echo $userinfo[0]->email ;?>)</small> <span></h1>
                <div class="school-info">
                    <div class="school-address pull-left"><i class="fa fa-map-marker"></i> <a href=""><?php echo $userinfo[0]->school_address ;?>, <?php echo $userinfo[0]->school_city ;?> </a></div>
                    <div class="school-area pull-left"><a href="#map"><?php echo $userinfo[0]->school_area ;?></a></div>
                    <div class="school-contact pull-left"><i class="fa fa-pencil"></i> <a href="#">Edit Information</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_header_sub school-info-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="dashboard-links">
                        <li>
                            <a href="edit_account.php" >
                                <i class="fa fa-user"></i>
                                <p>Edit Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="edit_school.php" >
                                <i class="fa fa-building"></i>
                                <p>School Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="school_jobs.php" >
                                <i class="fa fa-black-tie "></i>
                                <p>School Jobs</p>
                            </a>
                        </li>
                        <li>
                            <a href="school_branches.php" >
                                <i class="fa fa-building-o "></i>
                                <p>School Branches</p>
                            </a>
                        </li>
                        <li>
                            <a href="edit_school_teacher.php" >
                                <i class="fa fa-pencil"></i>
                                <p>School Teachers</p>
                            </a>
                        </li>
                        <li class="tabContact" style="float:right;">
                            <a href="#" >
                                <i class="fa fa-bullhorn"></i>
                                <p>Promotion<br/> <br/></p>
                            </a>
                        </li>
                        <li class="tabContact" style="float:right;">
                            <a href="#" >
                                <i class="fa fa-id-card"></i>
                                <p>Contact Us<br/><br/></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

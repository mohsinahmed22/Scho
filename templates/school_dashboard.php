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

    .review_rating_bar {
        display: inline-block;
        vertical-align: middle;
        width: 158px;
        height: 6px;
        background: rgb(239, 239, 239);
        margin-left: 22px;
    }
    .review_rating_bars {padding-left: 0;}
</style>
<div class="home kpsg-schools">
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
                                <a href="edit_profile.php" >
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
                                <a href="school_teachers.php" >
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
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h4>School Reviews</h4>
                    <hr>
                    <?php //print_r($allReviews); ?>
                    <table class="table table-striped table-hover table-bordered table-responsive " width="100%">
                        <tr>

                            <th width="30%">Parent Name</th>
                            <th width="30%">Rating</th>
                            <th width="50%">Review Message</th>
                        </tr>
                        <?php foreach ($allReviews as $reviews): ?>
                        <tr>

                            <td><?php echo $reviews->first_name . " " . $reviews->last_name ?><br/>
                                <small><i><?php echo time_elapsed_string($reviews->review_date)?></i></small>
                            </td>
                            <td>
                                <div class="review_rating">
                                    <?php for($ra = 1 ; $ra <= $reviews->overall_rating; $ra++):?>
                                        <span class="rating_r rating_r_<?php echo $ra ?>">
                                                                <i></i>
                                                            </span>
                                    <?php endfor; ?>
                                </div>
                            </td>
                            <td><?php echo substr($reviews->overall_message,0,80) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>

                </div>
                <div class="col-sm-4">
                    <h4>School Rating</h4>
                    <hr>
                    <div class="review_rating_container">
                        <div class="review_rating">
                            <div class="review_rating_num">4.5</div>
                            <div class="review_rating_stars">
                                <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                            </div>
                            <div class="review_rating_text">(<?php echo $overAllRatingCount ?> Reviews)</div>

                        </div>
                        <div class="review_rating_bars">
                            <ul>

                                <?php
                                for($r= 1; $r <= count($calculateRatingbar); $r++ ):
                                    $maxValue = max($calculateRatingbar);
                                    ?>
                                    <li>
                                        <span><?php echo $r ?> Star</span>
                                        <div class="review_rating_bar"><div style="width:
                                            <?php // echo $calculateRatingbar[$r]->overall;
                                            if($calculateRatingbar[$r]->overall == 0):
                                                echo 0;
                                            elseif($calculateRatingbar[$r]->overall == 1):
                                                echo (100/99) . '%';
                                            elseif($calculateRatingbar[$r]->overall <= 100):
                                                echo 100/(100-$calculateRatingbar[$r]->overall)* $calculateRatingbar[$r]->overall . '%';
                                            else:
                                                echo ($calculateRatingbar[$r]->overall/100)*100 . '%';
                                            endif;
                                            ?>
                                                    "></div></div>
                                    </li>
                                <?php endfor; ?>
                            </ul>

                        </div>
                    </div>
                    <a href="reviews" style="display: block; width: 100%; float:left;">View all Reviews</a>

                </div>
            </div>
    </div>
</div>

<?php  include "../includes/footer.php";?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>
    $('#aa').popover();
</script>
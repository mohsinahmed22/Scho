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
    <?php include "../includes/login_user_head.php" ?>
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
                    <h4>Your Reviews</h4>
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
                    <h4>Your Rating</h4>
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
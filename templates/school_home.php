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
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 title-cont">
                    <h1>School Name <span><a href="">Unclaimed</a><a id='aa' href="#" role="button" data-toggle="popover"  data-placement="top" ' data-trigger="focus" title="This School has not cliamed its profile" data-content="School leaders - claim your school's profile to edit general information and share what makes your school unique. Learn more. "><i style="font-size:12px; opacity:.5; margin: 0 10px" class="fa fa-question" ></i></a></span></h1>
                    <div class="school-info">
                        <div class="school-address pull-left"><i class="fa fa-map-marker"></i> <a href="">A248, Block C, North Nazimabad, Karachi </a></div>
                        <div class="school-area pull-left"><a href="#map">North Nazimabad</a></div>
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
                        <h3><span>Grades</span></h3>
                        <h2>Montessori - 10</h2>
                    </div>
                    <div class="col-sm-2 kpsg-review-bar  text-center">
                        <h3><span>Students</span></h3>
                        <h2>751</h2>
                    </div>
                    <div class="col-sm-2 kpsg-review-bar text-center no-border">
                        <h3 class="text-center"><span>Type</span></h3>
                        <h2>Public</h2>
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
                <div class="col-sm-8 sch-message">
                    <p>This school is rated above average in school quality compared to other schools in the state.
                        Students here perform above average on state tests, are making above average year-over-year academic
                        improvement, and this school has above average results in how well it’s serving disadvantaged students.
                    </p>
                </div>
                <div class="col-sm-4 sch-bar">
                    <ul class='list-inline' style="display: flex;">
                        <li class="text-center col-xs-12 col-sm-4"><a href="#"><i class="fa fa-pencil "></i><br/>Write Review</a></li>
                        <li class="text-center col-xs-12 col-sm-4"><a href="#"><i class="fa fa-heart "></i><br/>Save School</a></li>
                        <li class="text-center col-xs-12 col-sm-4"><a href="#"><i class="fa fa-building "></i><br/>Nearby Schools</a></li>
                    </ul>
                </div>
            </div>
            <div class="row school-main school-enve" >
                <div class="col-sm-2" >
                    <div class="head"  data-spy="affix" data-offset-top="480" data-offset-bototm="700">
                        <h3>Environment</h3>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="container-info">
                        <h4><i class="fa fa-graduation-cap"></i> General information<br/><small style="font-weight: 200;">Detail information about school, faculty, availablity and comfortablity etc.</small></h4>
                        <div class="container-box">

                            <div class="unclaimed-message">
                                <ul style="list-style:circle; padding-left:10px;"><li><strong>Are you an administrator at this school?</strong>
                                        Claim your school’s profile to edit general information and share what makes your school unique.
                                        <a href="#">Learn more</a>.</li>
                                    <li><strong>Are you a parent or student at this school?</strong>
                                        <a href="#">Encourage school administrators</a> to claim this school’s profile.</li></ul>
                            </div>
                        </div>
                    </div>
                    <div class="container-info">
                        <h4><i class="fa fa-graduation-cap"></i> General information<br/><small style="font-weight: 200;">Detail information about school, faculty, availablity and comfortablity etc.</small></h4>
                        <div class="container-box">

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
                <div class="col-sm-4">aaa</div>
            </div>

            <div class="row school-main school-rating" >
                <div class="col-sm-2">
                    <h5>Rate This School<br/>
                    <small>let other parents know about this school</small></h5>
                </div>
                <div class="col-sm-6">
                    <div class="review-rating">
                        <div class="row">
                            <div class="col-sm-2 text-center">
                                <div style="width: 50px; height: 50px; background: skyblue; border-radius: 25px; margin: 0 auto"></div>
                                <small>You</small>
                            </div>
                            <div class="col-sm-10">
                                <h4>How would you rate your experience at this school?</h4>
                                <!-- Script -->
                                <div class="post-action">
                                    <!-- Rating -->
                                    <select class='rating' id='rating' data-id='rating'>
                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>
                                    </select>
                                    <div style='clear: both;'></div>
                                    Average Rating : <span id='avgrating'></span>

                                    <!-- Set rating -->
                                    <script type='text/javascript'>
                                        //$(document).ready(function(){
                                        //    $('#rating_<?php //echo $postid; ?>//').barrating('set',<?php //echo $rating; ?>//);
                                        //});

                                    </script>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php  include "../includes/footer.php";?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>
    $('#aa').popover();
</script>
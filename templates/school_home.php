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
                    <div class="head">
                        <h3>School Details</h3>
                    </div>

                </div>
                    <div class="col-sm-7">
                    <div class="container-info">
                        <h4><i class="fa fa-graduation-cap"></i> General information<br/><small style="font-weight: 200;">Detail information about school, faculty, availablity and comfortablity etc.</small></h4>
                        <div class="container-box">
                            <div class="row">
                                <div class="col-sm-2"><h5>Description:</h5></div>
                                <div class="col-sm-10"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Phone:</h5></div>
                                <div class="col-sm-10"><p>000 000 0000</p></div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Email:</h5></div>
                                <div class="col-sm-10"><p>email@email.com</p></div>

                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Website:</h5></div>
                                <div class="col-sm-10"><p><a href="#" target="_blank">www.kpsg.pk</a></p></div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Facebook:</h5></div>
                                <div class="col-sm-10"><p>Page link <span class="pull-right"><i class="fa fa-thumbs-up"></i>  Like </span></p> </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Twitter:</h5></div>
                                <div class="col-sm-10"><p>Page link <span class="pull-right"><i class="fa fa-twitter"></i>  Follow us </span></p> </div>

                            </div>
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
            <div class="row school-main school-enve" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h3>Branches & Teachers</h3>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="container-info">
                        <h4><i class="fa fa-group"></i> Branches & Teachers Profiles<br/><small style="font-weight: 200;">Detail information about school, faculty, availablity and comfortablity etc.</small></h4>
                        <div class="container-box">
                            <div class="row">
                                <div class="col-sm-2"><h5>Teachers:</h5></div>
                                <div class="col-sm-10">
                                                    <p>TeacherName <span class="pull-right"><i class="fa fa-user"></i> Profile</span></p>
                                                    <hr>
                                                    <p>TeacherName <span class="pull-right"><i class="fa fa-user"></i> Profile</span></p>
                                                    <hr>
                                                    <p>TeacherName <span class="pull-right"><i class="fa fa-user"></i> Profile</span></p>
                                                    <hr>
                                                    <p>TeacherName <span class="pull-right"><i class="fa fa-user"></i> Profile</span></p>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"><h5>Branches:</h5></div>
                                <div class="col-sm-10"><p>BranchArea  <span class="pull-right"><i class="fa fa-building-o"></i> View Page</span></p>
                                                        <hr/>
                                                       <p>BranchArea  <span class="pull-right"><i class="fa fa-building-o"></i> View Page</span></p>
                                                        <hr/>
                                                        <p>BranchArea  <span class="pull-right"><i class="fa fa-building-o"></i> View Page</span></p>
                                </div>

                            </div>

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
            <div class="row school-main school-enve" >
                <div class="col-sm-2" >
                    <div class="head">
                        <img src='<?php echo $profile_photo_src ?>' width="100"/>
                        <h3>Facebook Page</h3>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="">
                        <?php

                        for($x=0; $x< $fd_count; $x++){
                            // user's custom message

                            if(isset($obj['data'][$x]['message'])) {
                                $message = $obj['data'][$x]['message'];
                            }

                            // to get the post id
                            $id = $obj['data'][$x]['id'];
                            $post_id_arr = explode('_', $id);
                            $post_id = $post_id_arr[1];


                            // picture from the link
                            if(isset($obj['data'][$x]['picture'])) {
                                $picture = $obj['data'][$x]['picture'];
                                $picture_url_arr = explode('&url=', $picture);
                                $picture_url = urldecode($picture_url_arr[0]);
                            }
                            // print_r($picture_url_arr);

                            // link posted
                            if(isset($obj['data'][$x]['link'])) {
                                $link = $obj['data'][$x]['link'];

                            }


                            // name or title of the link posted
                            if(isset($obj['data'][$x]['name'])) {
                                $name = $obj['data'][$x]['name'];

                            }

                            if(isset($obj['data'][$x]['description'])) {
                                $description = $obj['data'][$x]['description'];
                            }
                            $type = $obj['data'][$x]['type'];

                            // when it was posted
                            $created_time = $obj['data'][$x]['created_time'];
                            $converted_date_time = date( 'Y-m-d H:i:s', strtotime($created_time));
                            $ago_value = time_elapsed_string($converted_date_time);

                            // from
                            if(isset($obj['data'][$x]['from']['name'])) {
                                $page_name = $obj['data'][$x]['from']['name'];
                            }
                            // useful for photo
                            if(isset($obj['data'][$x]['object_id'])){
                                $object_id = $obj['data'][$x]['object_id'];
                            }

                            ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href='https://fb.com/<?php echo $fb_page_id ?>' target='_blank'><?php echo $page_name ?></a><br/>
                                    <small>shared a posts  - <?php echo $ago_value?></small>

                                    <?php
                                    if($type=="status"){
                                        echo "<div class='post-status'>";
                                        echo "<a href='{$link}'>View on Facebook</a>";
                                        echo "</div>";
                                    }elseif($type=="photo"){
                                        echo "<img src='https://graph.facebook.com/{$object_id}/picture'  width='100%'/>";
                                    }  else{
                                        if($picture_url){
                                            echo "<div class='post-picture text-center'>";
                                            echo "<img src='{$picture_url}' width='50%' />";
                                            echo "</div>";
                                        }

                                        echo "<div class='post-info'>";
                                        echo ($name) ? "<div class='post-info-name'>{$name}</div>" :'';
                                        echo ($description) ? "<div class='post-info-description'>{$description}</div>" :"";
                                        echo "</div>";
                                    }

                                    ?>


                                    <p style="line-height: 18px"><?php
                                        $messg = substr($message,0,250);
                                        if(strlen($message) > 250):
                                            echo  $messg . '...';
                                            echo  "<a href='https://fb.com/{$fb_page_id}'> read more</a>";
                                        else:
                                            echo  '' ;

                                        endif;
                                        ?></p>

                                </div>
                            </div>
                            <hr/>
                        <?php }?>
                        <div class="view-all" style="text-align: right">
                            <a href='https://fb.com/<?php echo $fb_page_id ?>' target='_blank'  >Visit Facebook Page</a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                </div>
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
        <div class="row school-main school-rating" >
            <h4>School Location</h4>
            <div id="map" style="width: 100%; height: 300px;"></div>
            <script>
                // Initialize and add the map
                function initMap() {
                    // The location of Uluru
                    var uluru = {lat:24.8609964, lng: 67.0689537};
                    // The map, centered at Uluru
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 9, center: uluru});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: uluru, map: map});
                }
            </script>
            <!--Load the API from the specified URL
            * The async attribute allows the browser to render the page while the API loads
            * The key parameter will contain your own API key (which is not needed for this tutorial)
            * The callback parameter executes the initMap() function
            -->
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR_o_3gqklzK8HfjqqSgdpYYT_yHjxkJQ&callback=initMap">
            </script>
        </div>



    </div>
</div>

<?php  include "../includes/footer.php";?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>
    $('#aa').popover();
</script>
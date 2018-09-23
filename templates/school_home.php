<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/21/2018
 * Time: 11:38 AM
 */
include '../includes/header.php'; ?>

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
            <div class="row">
                <div class="col-sm-2">Heading</div>
                <div class="col-sm-6">aaa</div>
                <div class="col-sm-4">aaa</div>
            </div>
        </div>
    </div>
</div>

<?php  include "../includes/footer.php";?>
<script>
    $('#aa').popover();
</script>
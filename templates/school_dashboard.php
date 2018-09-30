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
                    <h1><?php echo $userinfo[0]->first_name . " " .  $userinfo[0]->last_name ;?> <span></h1>
                </div>
            </div>
        </div>
        <div class="top_header_sub school-info-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="dashboard-links">
                            <li>
                                <a href="#" >
                                    <i class="fa fa-user"></i>
                                    <p>Edit Account</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="fa fa-building"></i>
                                    <p>School Profile</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="fa fa-facebook"></i>
                                    <p>Social Center</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="fa fa-black-tie "></i>
                                    <p>School Jobs</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="fa fa-building-o "></i>
                                    <p>School Branches</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="fa fa-pencil"></i>
                                    <p>School Teachers</p>
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
    </div>
</div>

<?php  include "../includes/footer.php";?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>
    $('#aa').popover();
</script>
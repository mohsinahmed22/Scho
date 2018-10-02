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

        <div class="container">
            <div class="row">
                <div class="col-sm-8 sch-message">
                    <h2>School Teachers </h2>

                </div>
                <div class="col-sm-4 sch-bar">
                    <a href="#" class="btn btn-primary pull-right">Add Teacher</a>
                </div>
            </div>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>On Job Teachers</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-hover table-bordered table-responsive " width="100%">
                                <tr>

                                    <th width="30%">Teacher Name</th>
                                    <th width="30%">Designation</th>
                                    <th width="50%">View Profile</th>
                                    <th width="50%">Action</th>
                                </tr>
                                <?php foreach ($teachers as $teacher): ?>
                                <tr>
                                    <td><?php echo $teacher->tutor_name; ?></td>
                                    <td><?php echo $teacher->tutor_designation; ?></td>
                                    <td><a href="tutorProfile.php?id=<?php echo $teacher->tutor_profile_id; ?>">View Profile</a></td>
                                    <td><a href="deleteProfile.php?id=<?php echo $teacher->tutor_profile_id; ?>">Delete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>


                </div>
                <div class="col-sm-3">
                    <p>Kindly search from your teacher profiles and add to your school</p>
                    <p><strong>To add New Teacher profile:<br/> <a href="#addTeacher">Add New Teacher</a></strong></p>
                </div>
            </div>
            <hr>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Search Teacher</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <form action=" edit_school_teacher.php">
                    <div class="row">
                        <div class="col"><input placeholder="Search Teacher.. ex: Name, Phone, email" name="search_teachers" type="text" class="form-control">
                            <p><small>Search from our large teachers library, help parents to rate your school teachers.</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button type="submit" name="searchSchool_teacher" class="btn btn-primary">Search Teacher Profile</button>
                </div>
                </form>
            </div>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col">
                            <h3>Search Results</h3>
                            <br/>
                            <table class="table table-striped table-hover table-bordered table-responsive " width="100%">
                                <tr>
                                    <th width="30%">Teacher Name</th>
                                    <th width="30%">Email</th>
                                    <th width="50%">Gender</th>
                                    <th width="30%">Phone</th>
                                    <th width="50%">Resume</th>
                                    <th width="50%">Action</th>
                                </tr>

                            </table>


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
        </form>
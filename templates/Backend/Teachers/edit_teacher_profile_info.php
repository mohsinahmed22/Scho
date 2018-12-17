<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/21/2018
 * Time: 11:38 AM
 */
include '../../../includes/header.php'; ?>
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
    <?php include "../../../includes/login_user_head.php" ?>
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
        <form id="regForm" action="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/edit/profile" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 sch-message">
                    <h2>Edit Teacher Profile
                    </h2>
                </div>
                <div class="col-sm-4 sch-bar">

                </div>
            </div>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Personal Information</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>Complete Name:</strong></p>
                            <input placeholder="School Name..."  name="tutor_name"  class="form-control"  value="<?php  echo $userinfo[0]->tutor_name ?>" disabled>
                            <p><small></small></p>
                            <br/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Age:</strong></p>
                            <input placeholder="Age Type..." name="tutor_age" class="form-control" value="<?php  echo $userinfo[0]->tutor_age ?>">
                            <p><small></small></p>
                        </div>
                        <div class="col">
                            <p><strong>Gender:</strong></p>
                            <select name="tutor_gender"  class="form-control">
                                <option selected="selected" value="<?php  echo $userinfo[0]->tutor_gender ?> ?>"><?php  echo $userinfo[0]->tutor_gender ?></option>

                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <p><small></small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Your Description:</strong></p>
                            <textarea placeholder="School description..."  class="form-control" name="school_description"><?php  echo $userinfo[0]->tutor_description ?></textarea>
                            <p><small>Add your objective and description..</small></p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <hr>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Contact Information</h4>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>Phone:</strong></p>
                            <input placeholder="Phone..." name="tutor_phone" class="form-control"  value="<?php  echo $userinfo[0]->tutor_phone ?>">
                            <p><small>Please enter your your valid Mobile or telephone..</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <hr>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Your Address</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>City:</strong></p>
                            <select name="tutor_city"  class="form-control">
                                <option value="karachi">Karachi</option>
                            </select>
                        </div>
                        <div class="col">
                            <p><strong>Area:</strong></p>
                            <select name="tutor_area" class="form-control">
                                <option selected="selected" value="<?php  echo $userinfo[0]->tutor_area ?> ?>"><?php  echo $userinfo[0]->tutor_area ?></option>
                                <option value="Clifton">Clifton</option>
                                <option value="DHA">DHA</option>
                                <option value="FB Area">FB Area</option>
                                <option value="Nazimabad">Nazimabad</option>
                                <option value="North Karachi">North Karachi</option>
                                <option value="North Nazimabad">North Nazimabad</option>
                                <option value="PECHS">PECHS</option>
                                <option value="Saddar">Saddar</option>
                                <option value="Sharah-e-Faisal">Sharah-e-Faisal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Address:</strong></p>
                            <input placeholder="Address..." name="tutor_address" class="form-control" value="<?php  echo $userinfo[0]->tutor_address ?>">
                            <p><small>Please enter complete address for parents for home tuition</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>

            <hr>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Map Address</h4>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>Google Map Latitute:</strong></p>
                            <input placeholder="Google Map Latitute.."  name="map_latitute" class="form-control"  value="<?php  echo $userinfo[0]->map_latitute ?>" class="form-control">
                            <p><small></small></p>
                        </div>
                        <div class="col">
                            <p><strong>Google Map Longtitute:</strong></p>
                            <input placeholder="Google Map Longtitute..." name="map_longtitute" class="form-control" value="<?php  echo $userinfo[0]->map_longtitute ?>" class="form-control">
                            <p><small></small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <hr>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Social Linking</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>Twitter:</strong></p>
                            <input placeholder="Twitter Link..."  name="tutor_linkedin" class="form-control" value="<?php  echo $userinfo[0]->tutor_linkedin ?>">
                            <p><small>Please enter your Twitter page link</small></p>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col">
                            <p><strong>Facebook Page:</strong></p>
                            <input placeholder="Facebook Page..." name="tutor_facebook_link" class="form-control" value="<?php  echo $userinfo[0]->tutor_facebook_link ?>">
                            <p><small>Please enter your facebook page link..</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="hidden" value="<?php  echo $userinfo[0]->id ?>" name="tid">

                    <hr/>
                    <button type="submit" name="update_UserSchool" class="btn btn-primary">Update School Profile</button>
                </div>
            </div>
        </div>
        </form>
        <hr/>
        <!-- Qualification Section -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 sch-message">
                    <h2>Add Experience
                    </h2>
                </div>
                <div class="col-sm-4 sch-bar">

                </div>
            </div>
            <div class="row school-main"  id="experence" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Professional Experience</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <?php // print_r($userinfo) ?>
                            <table class="table table-striped table-hover table-bordered table-responsive " width="100%">
                                <tr>

                                    <th width="30%">Company/School</th>
                                    <th width="30%">Title</th>
                                    <th width="50%">Date</th>
                                    <th width="50%">Description</th>
                                    <th width="50%">Action</th>
                                </tr>

                                <?php if(!empty($expe)):?>
                                    <?php foreach ($expe as $expernice): ?>
                                        <tr>
                                            <td><?php echo $expernice->tutors_experience_job_company; ?></td>
                                            <td><?php echo $expernice->tutors_experience_job_title; ?></td>
                                            <td><?php echo $expernice->tutors_experience_job_date; ?></td>
                                            <td><?php echo $expernice->tutors_experience_job_description; ?></td>

                                            <td><a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/experience/edit/<?php echo $expernice->id; ?>">Edit</a>
                                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/experience/delete/<?php echo $expernice->id; ?>">Delete</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else:?>
                                    <tr>
                                        <td colspan="5" class="text-center"><strong>No Professional Experience listed</strong></td>
                                    </tr>
                                <?php endif;?>
                            </table>

                        </div>
                    </div>


                </div>
                <div class="col-sm-3">
                    <p>Kindly add your your professoinal jobs in past</p>
                    <p><strong>To add new experience to your profile:<br/> <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/experience/add">Click here</a></strong></p>
                </div>
            </div>
        </div>
        <hr/>
        <!-- Qualification Section -->
        <div class="container" id="qualification">
            <div class="row">
                <div class="col-sm-8 sch-message">
                    <h2>Add Qualification
                    </h2>
                </div>
                <div class="col-sm-4 sch-bar">

                </div>
            </div>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Qualification, Diploma or Certification</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <?php //print_r($teachers) ?>
                            <table class="table table-striped table-hover table-bordered table-responsive " width="100%">
                                <tr>

                                    <th width="30%">Year</th>
                                    <th width="30%">Title</th>
                                    <th width="50%">Description</th>
                                    <th width="50%">Action</th>
                                </tr>

                                <?php if(!empty($qualificaitons)):?>
                                    <?php foreach ($qualificaitons as $quali): ?>
                                        <tr>
                                            <td><?php echo $quali->tutors_qualification_year; ?></td>
                                            <td><?php echo $quali->tutors_qualification_title; ?></td>
                                            <td><?php echo $quali->tutors_qualification_description; ?></td>
                                            <td>
                                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/qualification/edit/<?php echo $quali->id; ?>">Edit</a>
                                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/qualification/delete/<?php echo $quali->id; ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else:?>
                                    <tr>
                                        <td colspan="4" class="text-center"><strong>No qualification listed</strong></td>
                                    </tr>
                                <?php endif;?>
                            </table>

                        </div>
                    </div>


                </div>
                <div class="col-sm-3">
                    <p>Kindly add your qualification, certification or any diploma</p>
                    <p><strong>To add new qualification to your profile:<br/> <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/qualification/add">Click here</a></strong></p>
                </div>
            </div>
        </div>

    </div>
</div>

    <?php  include "../../../includes/footer.php";?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <script>
        $('#aa').popover();
    </script>
        </form>
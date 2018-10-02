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
        <form id="regForm" action="edit_school.php">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 sch-message">
                    <h2>Edit School Details
                    </h2>
                </div>
                <div class="col-sm-4 sch-bar">

                </div>
            </div>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>School Information</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>School Name:</strong></p>
                            <input placeholder="School Name..." oninput="this.className = ''" name="school_name"  class="form-control"  value="<?php  echo $userinfo[0]->school_name ?>">
                            <p><small></small></p>
                            <br/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>School Type:</strong></p>
                            <input placeholder="School Type..." oninput="this.className = ''" name="school_type" class="form-control" value="<?php  echo $userinfo[0]->school_type ?>">
                            <p><small>Example: O Level, Alevel, Matric System etc...</small></p>
                        </div>
                        <div class="col">
                            <p><strong>Montessori System Type:</strong></p>
                            <input placeholder="Montessori System (ex: AMI, LMI etc)..." oninput="this.className = ''" class="form-control" name="school_mont_system" value="<?php  echo $userinfo[0]->school_mont_system ?>" >
                            <p><small>Example: AMI, LMI etc...</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Enrolled Students:</strong></p>
                            <input placeholder="Total students in school..." oninput="this.className = ''" class="form-control" name="school_enrolled_students" value="<?php  echo $userinfo[0]->school_enrolled_students ?>">
                            <p><small>Example: 200 students  etc...</small></p>
                        </div>
                        <div class="col">
                            <p><strong>School Grade Level:</strong></p>
                            <input placeholder="School Grades..." oninput="this.className = ''" name="school_grade"  class="form-control" value="<?php  echo $userinfo[0]->school_grade ?>">
                            <p><small>Example: Montessorri to 10 Grade or 1-10 Grade..</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Enrolled Students:</strong></p>
                            <textarea placeholder="School description..." oninput="this.className = ''" class="form-control" name="school_decription"><?php  echo $userinfo[0]->school_description ?></textarea>
                            <p><small>Example: Add school detail description..</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr>
                            <span class="chck-box-format">
                                <input oninput="this.className = ''" name="school_special_child" type="checkbox" class="checkbox-inline"> <label><strong>Specail Child</strong></label>
                                <input oninput="this.className = ''" name="school_main_campus" type="checkbox"> <label><strong>Is this main Campus?</strong></label>
                                <input oninput="this.className = ''" name="school_branches" type="checkbox"> <label><strong>Is there any School Branches?</strong></label>
                            </span>
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
                        <h4>School Address</h4>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>City:</strong></p>
                            <select name="school_city"  class="form-control">
                                <option value="karachi">Karachi</option>
                            </select>



                        </div>
                        <div class="col">
                            <p><strong>Area:</strong></p>
                            <select name="school_area"  class="form-control">
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
                            <input placeholder="Address..." oninput="this.className = ''" name="school_address" class="form-control">
                            <p><small>Please enter complete School address</small></p>
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
                        <h4>School Address</h4>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>School Phone:</strong></p>
                            <input placeholder="School Phone..." oninput="this.className = ''" name="school_phone" class="form-control"  value="<?php  echo $userinfo[0]->school_phone ?>">
                            <p><small>Please enter your school Landline telephone..</small></p>
                        </div>
                        <div class="col">
                            <p><strong>School Contact Email:</strong></p>
                            <input placeholder="School email..." oninput="this.className = ''" name="school_email" value="<?php  echo $userinfo[0]->school_email ?>" class="form-control">
                            <p><small>Please enter your school offical email address..</small></p>
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
                        <h4>School Address</h4>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>Google Map Latitute:</strong></p>
                            <input placeholder="Google Map Latitute.." oninput="this.className = ''" name="map_latitute" class="form-control"  value="<?php  echo $userinfo[0]->map_latitute ?>" class="form-control">
                            <p><small></small></p>
                        </div>
                        <div class="col">
                            <p><strong>Google Map Longtitute:</strong></p>
                            <input placeholder="Google Map Longtitute..." oninput="this.className = ''" name="map_longtitute" class="form-control" value="<?php  echo $userinfo[0]->map_longtitute ?>" class="form-control">
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
                            <p><strong>Website link:</strong></p>
                            <input placeholder="Website Link..." oninput="this.className = ''" name="school_website_link" class="form-control" value="<?php  echo $userinfo[0]->school_website_link ?>">
                            <p><small>Please enter your school website link..</small></p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Twitter:</strong></p>
                            <input placeholder="Twitter Link..." oninput="this.className = ''" name="school_twitter_link" class="form-control" value="<?php  echo $userinfo[0]->school_twitter_link ?>">
                            <p><small>Please enter your facbeook page link</small></p>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col">
                            <p><strong>Facebook Page:</strong></p>
                            <input placeholder="Facebook Page..." oninput="this.className = ''" name="school_fb_link" class="form-control" value="<?php  echo $userinfo[0]->school_fb_link ?>">
                            <p><small>Please enter your facbeook page link..</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Facebook Page Access Token Key:</strong></p>
                            <input placeholder="Facebook Page Access Token Key..." oninput="this.className = ''" name="fb_page_acesskey" class="form-control" value="<?php  echo $userinfo[0]->fb_page_acesskey ?>">
                            <p><small>Please enter your facbeook page link..</small></p>
                        </div>
                        <div class="col">
                            <p><strong>Facebook Page ID:</strong></p>
                            <input placeholder="Facebook Page ID..." oninput="this.className = ''" name="fb_pageid" class="form-control" value="<?php  echo $userinfo[0]->fb_pageid ?>">
                            <p><small>Please enter your facbeook page link..</small></p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <hr/>
                    <button type="submit" name="update_UserSchool" class="btn btn-primary">Update School Profile</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

    <?php  include "../includes/footer.php";?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <script>
        $('#aa').popover();
    </script>
        </form>
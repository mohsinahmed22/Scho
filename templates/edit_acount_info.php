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
        <form id="regForm" action=" edit_account.php">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 sch-message">
                    <h2>Edit Account Information
                    </h2>
                </div>
                <div class="col-sm-4 sch-bar">

                </div>
            </div>
            <div class="row school-main" >
                <div class="col-sm-2" >
                    <div class="head">
                        <h3>Information</h3>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col">
                            <p><strong>Email/Username:</strong></p>
                            <input placeholder="E-mail..." oninput="this.className = ''" name="email"  class="form-control" disabled value="<?php  echo $userinfo[0]->email ?>">
                            <p><small></small></p>
                            <br/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>First Name:</strong></p>
                            <input placeholder="First name..." oninput="this.className = ''" name="first_name" class="form-control" value="<?php  echo $userinfo[0]->first_name ?>">
                            <p><small></small></p>
                        </div>
                        <div class="col">
                            <p><strong>Last Name:</strong></p>
                            <input placeholder="Last name..." oninput="this.className = ''" name="last_name" class="form-control" value="<?php  echo $userinfo[0]->last_name ?>">
                            <p><small></small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr/>
                            <button type="submit" name="update_UserAccount" class="btn btn-primary">Update Account</button>

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
                        <h3>Change Password</h3>
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col"> <p><strong>Password:</strong></p>
                            <input placeholder="Password..." oninput="this.className = 'form-control '" name="password" type="password" class="form-control">
                            <p><small></small></p>
                        </div>
                        <div class="col">
                            <p><strong>Confirm Password:</strong></p>
                            <input placeholder="Password..." oninput="this.className = 'form-control '" name="password" type="password" class="form-control">
                            <p><small></small></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <hr/>
                            <button type="submit" name="update_UserPassword" class="btn btn-primary">Update Password</button>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>





        </div>school_address
        </form>
    </div>
</div>

    <?php  include "../includes/footer.php";?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <script>
        $('#aa').popover();
    </script>
        </form>
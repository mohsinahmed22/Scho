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
    <?php  include "../includes/login_user_head.php" ;?>
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
                    <h2>School Teachers </h2>

                </div>
                <div class="col-sm-4 sch-bar">
<!--                    <a href="#" class="btn btn-primary pull-right">Add Teacher</a>-->
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
                            <?php //print_r($teachers) ?>
                            <table class="table table-striped table-hover table-bordered table-responsive " width="100%">
                                <tr>

                                    <th width="30%">Teacher Name</th>
                                    <th width="30%">Designation</th>
                                    <th width="50%">View Profile</th>
                                    <th width="50%">Action</th>
                                </tr>

                                <?php if(!empty($teachers)):?>
                                    <?php foreach ($teachers as $teacher): ?>
                                    <tr>
                                        <td><?php echo $teacher->tutor_name; ?></td>
                                        <td><?php echo $teacher->tutor_designation; ?></td>
                                        <td><a href="tutorProfile.php?id=<?php echo $teacher->tutor_profile_id; ?>">View Profile</a></td>
                                        <td><a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/teachers/delete/<?php echo $teacher->stid; ?>">Delete</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else:?>
                                    <tr>
                                        <td colspan="4" class="text-center"><strong>No Teacher Found at School</strong></td>
                                    </tr>
                                <?php endif;?>
                            </table>

                        </div>
                    </div>


                </div>
                <div class="col-sm-3">
                    <p>Kindly search from your teacher profiles and add to your school</p>
                    <p><strong>To add New Teacher to school profile:<br/> search teacher below or invite them via email address <a href="#">Invite Teacher</a></strong></p>
                </div>
            </div>
            <hr>
            <div class="row school-main">
                <div class="col-sm-2" >
                    <div class="head">
                        <h4>Search Teacher</h4>
                    </div>
                </div>
                <div class="col-sm-7" >
                    <form action="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/teachers" method="post">
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
            <?php //  print_r($searchResults)?>
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
                                    <th width="20%">Email</th>
                                    <th width="10%">Gender</th>
                                    <th width="10%">Phone</th>
                                    <th width="10%">Resume</th>
                                    <th width="30%">Action</th>
                                </tr>
                                <?php if (!empty($searchResults)):?>
                                    <?php foreach ($searchResults as $s): ?>
                                        <tr>
                                            <td><?php echo $s->tutor_name?></td>
                                            <td><?php echo $s->email?></td>
                                            <td><?php echo $s->tutor_gender?></td>
                                            <td><?php echo $s->tutor_phone?></td>
                                            <td><a href="<?php echo $s->tutor_resume?>" target="_blank">Resume</a></td>
                                            <td>
                                                <?php if(!empty($teachers)):?>
                                                    <?php foreach ($teachers as $t):
                                                        if($t->tutor_profile_id == $s->tid):
                                                            $add_tid = $t->tutor_profile_id;
                                                        endif; ?>
                                                    <?php endforeach; ?>
                                                    <?php if(isset($add_tid)){
                                                            if($add_tid == $s->tid):
                                                        echo "Teached Already Added";
                                                        else:?>
                                                            <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/teachers/<?php echo $s->user_id ?>/<?php echo $s->tid ?>">Add Teacher</a>
                                                    <?php endif;
                                                    }else{?>
                                                         <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/teachers/<?php echo $s->user_id ?>/<?php echo $s->tid ?>">Add Teacher</a>
                                                    <?php }?>
                                                <?php else: ?>
                                                    <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/teachers/<?php echo $s->user_id ?>/<?php echo $s->tid ?>">Add Teacher</a>
                                                <?php endif; ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="text-center"><strong>No Teacher Found</strong></td>
                                    </tr>
                                <?php endif; ?>
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
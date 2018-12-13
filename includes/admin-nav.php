<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 11/25/2018
 * Time: 3:54 PM
 */
?>
    <ul class="dashboard-links">
                            <li>
                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/edit/account" >
                                    <i class="fa fa-user"></i>
                                    <p>Edit Account</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/edit/profile" >
                                    <i class="fa fa-id-card"></i>
                                    <p>Edit <br/>Profile</p>
                                </a>
                            </li>
                            <?php if ($_SESSION['user_type'] == 'school'):?>
                            <li>
                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/jobs" >
                                    <i class="fa fa-black-tie "></i>
                                    <p>School Jobs</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/branches" >
                                    <i class="fa fa-building-o "></i>
                                    <p>School Branches</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/teachers" >
                                    <i class="fa fa-pencil"></i>
                                    <p>School Teachers</p>
                                </a>
                            </li>
                            <?php elseif ($_SESSION['user_type'] == 'teacher'): ?>

                                <li>
                                    <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/edit/profile#experence" >
                                        <i class="fa fa-id-badge"></i>
                                        <p>Add <br/> Qualificaiton</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/edit/profile#qualification" >
                                        <i class="fa fa-star"></i>
                                        <p>Add <br/> Experience</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URI ?><?php echo $_GET['type'] ?>/jobs" >

                                        <i class="fa fa-black-tie"></i>
                                        <p>Job<br/> Application</p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li class="tabContact" style="float:right;">
                                <a href="#" >
                                    <i class="fa fa-bullhorn"></i>
                                    <p>Promotion<br/> <br/></p>
                                </a>
                            </li>
                            <li class="tabContact" style="float:right;">
                                <a href="#" >
                                    <i class="fa fa-id-card"></i>
                                    <p>Contact Us<br/><br/> </p>
                                </a>
                            </li>
                        </ul>
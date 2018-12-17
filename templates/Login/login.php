<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/13/2018
 * Time: 11:43 AM
 */
include '../../includes/header.php'; ?>
    <div class="kpsg-register">
        <div class="register-bg">
            <div class="register-heading">
                <div class="container">
                    <div class="row text-center ">
                        <div class="col-sm-12">
                            <h2>Find great schools, share your stories <br/>and get parenting advice</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="register-box">

                            <div class="row">

                                <div class="col-sm-6">
                                    <h3><i class="fa fa-key"></i> Account Login</h3>
                                    <hr/>
                                    <form action="register.php" class="login-form for" method="post">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Username" name="email" required="required" style="margin-bottom:20px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="password" class="form-control" placeholder="Password" name="password" required="required"  style="margin-bottom:20px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button type="submit" name='login_form' class="btn btn-primary btn-lg login-btn">Login </button> <span class="pull-right"><a href="forget-password.php">Forget your password?</a></span>
                                            </div>
                                        </div>
                                    </form>
                                    <hr/>
                                    <a href="register/school" class="btnReg regSchool">Register as School</a>
                                    <a href="register/teacher" class="btnReg regTeacher">Register as Teacher</a>
                                    <a href="register/parents" class="btnReg regParent">Register as Parent</a>

                                </div>
                                <div class="col-sm-6 info-login">
                                    <h3><i class="fa fa-search"></i> Find School</h3>
                                    <p>Find School in your area</p>
                                    <h3><i class="fa fa-certificate"></i> Find Teachers</h3>
                                    <p>Find Better Teacher and post jobs.</p>
                                    <h3><i class="fa fa-envelope"></i> Weekly newsletter</h3>
                                    <p>Get our best articles, worksheets and more delivered weekly.</p>
                                    <h3><i class="fa fa-heart"></i>  Follow schools</h3>
                                    <p>Find better School for your childrens</p>
                                    <h3><i class="fa fa-comment"></i>  Write reviews</h3>
                                    <p>Help other parents find a great school by sharing your experiences.</p>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="register-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center"><p><span>250,000+</span> school profiles <span>1.3M+</span> community reviews of schools <span>14,000+</span> articles, worksheets, and videos</p></div>
                </div>
            </div>


        </div>
    </div>
<?php include '../../includes/footer.php'; ?>
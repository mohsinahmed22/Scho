<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 10/16/2018
 * Time: 12:28 PM
 */
include '../includes/header.php'; ?>

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
                            <div class="col-sm-12 text-center">

                                <br/>
                                <br/>
                                <h3>Thank You for Registration</h3>
                                <h2>Verfiy your Email Address</h2>
                                <p>Thank your for your registeration at Karachi Parents School Guide (KPSG). Please check your inbox for a confirmation email.<br/> Click the link in the email to to confirm your registered email address</p>
                                <br/>
                                <a href="<?php echo BASE_URI ?>verify/<?php echo $_GET['email']?>/<?php echo $_GET['verify']?>" class="btn btn-primary btn-lg login-btn">Re-send Confirmation Email </a>
                                <br/><br/>
                                <p>If you already confirmed your email address than please ignore and <a href="<?php echo BASE_URI ?>login">Login </a></p>

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

<?php include '../includes/footer.php'; ?>

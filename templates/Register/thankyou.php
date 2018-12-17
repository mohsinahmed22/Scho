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
                                <div class="col-sm-12">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <script>
                                        var finished_rendering = function() {
                                            console.log("finished rendering plugins");
                                            var spinner = document.getElementById("spinner");
                                            spinner.removeAttribute("style");
                                            spinner.removeChild(spinner.childNodes[0]);
                                        }
                                        FB.Event.subscribe('xfbml.render', finished_rendering);
                                    </script>
                                    <div id="spinner"
                                         style="
                                            background: #4267b2;
                                            border-radius: 5px;
                                            color: white;
                                            height: 60px;
                                            text-align: center;
                                            width: 100%;">
                                        Loading
                                        <div
                                                class="fb-login-button"
                                                data-max-rows="1"
                                                data-size="XLarge"
                                                data-button-type="continue_with KPSG"
                                                data-use-continue-as="true"

                                        ></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p style="margin: 20px 0 0"><strong>OR <br/>
                                            Log in with your email</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="register.php" class="login-form for" method="post">
                                        <input type="text" class="form-control" placeholder="Username" required="required">
                                        <input type="password" class="form-control" placeholder="Password" required="required">
                                        <button type="submit" name='login_form' class="btn btn-primary btn-lg login-btn">Login </button>
                                    </form>
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
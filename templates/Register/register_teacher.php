
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
                                <form id="regForm" action="<?php echo BASE_URI ?>login"  method="post" enctype="multipart/form-data">
                                    <h2>Teacher Registration:</h2>
                                    <!-- One "tab" for each step in the form: -->

                                    <div class="tab school_account_info"><h4>Account Information:</h4>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Email:</strong></p>
                                                <input placeholder="E-mail..." oninput="this.className = 'form-control '" name="email" class="form-control">
                                                <p><small>Email address should be your login id</small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Password:</strong></p>
                                                <input placeholder="Password..." oninput="this.className = 'form-control '" name="password" type="password" class="form-control">
                                                <p><small></small></p>
                                            </div>
                                        </div>
                                        <input name="user_type" value="teacher" type="hidden">
                                    </div>
                                    <div class="tab school_info"><h4>Teacher Information:</h4>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>First Name:</strong></p>
                                                <input placeholder="First name..." oninput="this.className = 'form-control '" name="first_name" class="form-control">
                                                <p><small></small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Last Name:</strong></p>
                                                <input placeholder="Last name..." oninput="this.className = 'form-control '" name="last_name" class="form-control">
                                                <p><small></small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Age:</strong></p>
                                                <input placeholder="Age" oninput="this.className = 'form-control '" name="tutor_age" class="form-control">
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Gender:</strong></p>
                                                <select name="tutor_gender" class="form-control">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>City:</strong></p>
                                                <select name="tutor_city"  class="form-control">
                                                    <option value="karachi">Karachi</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Area/Zone:</strong></p>
                                                <select name="tutor_area" class="form-control">
                                                    <option value="All Location">All Location</option>
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
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Current Address:</strong></p>
                                                <input placeholder="Current Address..." oninput="this.className = 'form-control '" name="tutor_address" class="form-control">
                                                <p><small></small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Mobile:</strong></p>
                                                <input placeholder="Phone Number..." oninput="this.className = 'form-control '" name="tutor_phone" class="form-control">
                                                <p><small></small></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col">
                                                <p><strong>About Urself:</strong></p>
                                                <textarea placeholder="About description..." oninput="this.className = 'form-control '" name="tutor_description" class="form-control"></textarea>
                                                <p><small></small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>CNIC Card:</strong></p>
                                                <input placeholder="ex: 00000-0000000-1" oninput="this.className = 'form-control '" name="tutor_cnic" class="form-control">
                                                <p><small>Your CNIC number is used only for verification of your identity and to avoid duplicate profiles. It is not shown anywhere on our website and is not shared with any third party at all. Without verification of your CNIC number, your profile will be shown as an unverified and you may be not be able to receive any home, Quran or online tuition from us. Students do not prefer to hire an unverified tutor.</small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Facebook Profile:</strong></p>
                                                <input placeholder="Facebook Profile..." oninput="this.className = 'form-control '" name="tutor_facebook_link" class="form-control">
                                                <p><small>Example: <strong>https://www.facebook.com/karachiparentsguide/</strong></small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Linkedin Profile:</strong></p>
                                                <input placeholder="Linkedin Profile..." oninput="this.className = 'form-control '" name="tutor_linkedin" class="form-control">
                                                <p><small>Example: <strong>https://www.linkedin.com/</strong></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab school_address">
                                        <h4>Teacher Experience:</h4>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>Are you on job?</strong></p>
                                                <span class="chck-box-format">
                                                        <input oninput="this.className = ''" name="tutor_job_status" type="radio" class="checkbox-inline" value="Yes"> <label><strong>Yes </strong></label>
                                                        <input oninput="this.className = ''" name="tutor_job_status" type="radio" class="checkbox-inline" value="No"  checked> <label><strong>No </strong></label>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>Where do you want to teach?:</strong></p>
                                                <span class="chck-box-format">
                                                    <input oninput="this.className = ''" name="tutor_where_to_teach[]" type="checkbox" class="checkbox-inline" value="At Student Place"> <label><strong>At Student Place </strong></label>
                                                    <input oninput="this.className = ''" name="tutor_where_to_teach[]" type="checkbox" value="At Your Place"> <label><strong>At Your Place </strong></label>
                                                    <input oninput="this.className = ''" name="tutor_where_to_teach[]" type="checkbox" value="Academy"> <label><strong>Academy</strong></label>
                                                    <input oninput="this.className = ''" name="tutor_where_to_teach[]" type="checkbox" value="School"> <label><strong>School</strong></label></p>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Available Timing for Tuition? (Optional)</strong></p>
                                                <input placeholder="Available Timings..." oninput="this.className = 'form-control'" name="tutor_tuition_timing" class="form-control">
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>How much experience you have?</strong></p>
                                                <input placeholder="Experience.." oninput="this.className = 'form-control'" name="tutor_experience" class="form-control">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>Upload CV?</strong></p>
                                                <input type="file" required name="tutor_cv" class="form-control">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab school_survey">
                                        <h4>Survey:</h4>
                                        <p>Please answer the following question. </p>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Q1: How you hear about us?</strong></p>
                                                <select name="hear_about_us" class="form-control">
                                                    <option value="Website">Website</option>
                                                    <option value="News Paper">News Paper</option>
                                                    <option value="Twitter">Twitter</option>
                                                    <option value="Facebook">Facebook</option>
                                                    <option value="Promotional Email">Promotional Email</option>
                                                    <option value="Recommended by Friend">Recommended by Friend</option>
                                                    <option value="Recommended by Parents">Recommended by Parents</option>
                                                    <option value="Recommended by School">Recommended by School</option>
                                                    <option value="Recommended by Teacher">Recommended by Teacher</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Q2: How you rate us?</strong></p>
                                                <select name="rate_us" class="form-control">
                                                    <option value="5">5 out of 5</option>
                                                    <option value="4">4 out of 5</option>
                                                    <option value="3">3 out of 5</option>
                                                    <option value="2">2 out of 5</option>
                                                    <option value="1">1 out of 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>Q3: Why you want to join our website?</strong></p>
                                                <textarea placeholder="Answer Q3:" oninput="this.className = 'form-control '" name="why_to_join"  class="form-control"></textarea>
                                                <p><small></small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>Q4: Help us to Improve?</strong></p>
                                                <textarea placeholder="Answer Q4:" oninput="this.className = 'form-control '" name="how_to_improve"  class="form-control"></textarea>
                                                <p><small></small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>Something About KPSG - Karachi Parents School Guide</strong></p>
                                                <textarea placeholder="Answer Q4:" oninput="this.className = 'form-control '" name="testimonials"  class="form-control"></textarea>
                                                <p><small></small></p>
                                            </div>
                                        </div>

                                    </div>

                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-primary">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-primary">Next</button>
                                            <button type="submit" id="submit" class="btn btn-primary" style="display: none" name="submit">Submit</button>
                                        </div>
                                    </div>
                                    <!-- Circles which indicates the steps of the form: -->
                                    <div style="text-align:center;margin-top:40px;">
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>

                                    </div>
                                </form>

                                <script>
                                    var currentTab = 0; // Current tab is set to be the first tab (0)
                                    showTab(currentTab); // Display the crurrent tab

                                    function showTab(n) {
                                        // This function will display the specified tab of the form...
                                        var x = document.getElementsByClassName("tab");
                                        x[n].style.display = "block";
                                        //... and fix the Previous/Next buttons:
                                        if (n == 0) {
                                            document.getElementById("prevBtn").style.display = "none";
                                        } else {
                                            document.getElementById("prevBtn").style.display = "inline";
                                        }
                                        if (n == (x.length - 1)) {
                                            document.getElementById("nextBtn").style.display = "none";
                                            document.getElementById("submit").style.display = "inline";
                                        } else {
                                            document.getElementById("nextBtn").innerHTML = "Next";
                                        }
                                        //... and run a function that will display the correct step indicator:
                                        fixStepIndicator(n)
                                    }

                                    function nextPrev(n) {
                                        // This function will figure out which tab to display
                                        var x = document.getElementsByClassName("tab");
                                        // Exit the function if any field in the current tab is invalid:
                                        if (n == 1 && !validateForm()) return false;
                                        // Hide the current tab:
                                        x[currentTab].style.display = "none";
                                        // Increase or decrease the current tab by 1:
                                        currentTab = currentTab + n;
                                        // if you have reached the end of the form...
                                        if (currentTab >= x.length) {
                                            // ... the form gets submitted:
                                            document.getElementById("regForm").submit();
                                            return false;
                                        }
                                        // Otherwise, display the correct tab:
                                        showTab(currentTab);
                                    }

                                    function validateForm() {
                                        // This function deals with validation of the form fields
                                        var x, y, i, valid = true;
                                        x = document.getElementsByClassName("tab");
                                        y = x[currentTab].getElementsByTagName("input");
                                        // A loop that checks every input field in the current tab:
                                        for (i = 0; i < y.length; i++) {
                                            // If a field is empty...
                                            if (y[i].value == "") {
                                                // add an "invalid" class to the field:
                                                y[i].className += " invalid";
                                                // and set the current valid status to false
                                                valid = false;
                                            }
                                        }
                                        // If the valid status is true, mark the step as finished and valid:
                                        if (valid) {
                                            document.getElementsByClassName("step")[currentTab].className += " finish";
                                        }
                                        return valid; // return the valid status
                                    }

                                    function fixStepIndicator(n) {
                                        // This function removes the "active" class of all steps...
                                        var i, x = document.getElementsByClassName("step");
                                        for (i = 0; i < x.length; i++) {
                                            x[i].className = x[i].className.replace(" active", "");
                                        }
                                        //... and adds the "active" class on the current step:
                                        x[n].className += " active";
                                    }
                                </script>
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


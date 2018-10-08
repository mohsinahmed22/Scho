
<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/13/2018
 * Time: 11:43 AM
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
                            <div class="col-sm-12">
                                <form id="regForm" action="register.php" method="post">
                                    <h2>School Registration:</h2>
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
                                        <hr>
                                        <h4>School Information:</h4>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>School Name:</strong></p>
                                                <input placeholder="School name..." oninput="this.className = 'form-control '" name="school_name" class="form-control">
                                                <p><small>Main Branch or Franchise name...</small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>First Name:</strong></p>
                                                <input placeholder="First name..." oninput="this.className = 'form-control '" name="first_name" class="form-control">
                                                <p><small>Concern person first name</small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Last Name:</strong></p>
                                                <input placeholder="Last name..." oninput="this.className = 'form-control '" name="last_name" class="form-control">
                                                <p><small>Concern person last name</small></p>
                                            </div>
                                        </div>

                                        <input name="user_type" value="school" type="hidden">
                                    </div>
                                    <div class="tab school_info"><h4>School Detail:</h4>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>School Type:</strong></p>
                                                <input placeholder="School Type..." oninput="this.className = 'form-control '" name="school_type" class="form-control">
                                                <p><small>Example: O Level, Alevel, Matric System etc...</small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Montessori System:</strong></p>
                                                <input placeholder="Montessori System.." oninput="this.className = 'form-control '" name="school_mont_system" class="form-control">
                                                <p><small>If no faculity available please enter <strong>N/A</strong></small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Total Enrolled Students:</strong></p>
                                                <input placeholder="Total students in school..." oninput="this.className = 'form-control '" name="school_enrolled_students" class="form-control">
                                                <p><small>Example: 200 students  etc...</small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>School Grade:</strong></p>
                                                <input placeholder="School Grades..." oninput="this.className = 'form-control '" name="school_grade" class="form-control">
                                                <p><small>Example: Montessorri to 10 Grade or 1-10 Grade..</small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>School Complete Description:</strong></p>
                                                <textarea placeholder="School description..." oninput="this.className = 'form-control '" name="school_description" class="form-control"></textarea>
                                                <p><small>Add school detail description..</small></p>
                                            </div>
                                        </div>
                                        <hr>

                                        <span class="chck-box-format">
                                            <input oninput="this.className = 'form-control '" name="school_main_campus" type="checkbox" value="1"> <label><strong>Is this main Campus?</strong></label>
                                            <input oninput="this.className = 'form-control '" name="school_branches" type="checkbox" value="1"> <label><strong>Is there any School Branches?</strong></label>
                                            <input oninput="this.className = 'form-control '" name="school_special_child" type="checkbox" class="checkbox-inline" value="1"> <label><strong>Special Children Facility</strong></label>


                                        </span>
                                    </div>
                                    <div class="tab school_address"><h4>School Address:</h4>
                                        <div class="row">
                                            <div class="col">
                                                <p><strong>School Complete Address:</strong></p>
                                                <input placeholder="Complete School Address.." oninput="this.className = 'form-control '" name="school_address"  class="form-control">
                                                <p><small>Please enter complete School Address</small></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>City:</strong></p>
                                                <select name="school_city"  class="form-control">
                                                    <option value="karachi">Karachi</option>
                                                </select>
                                                <p><small>Select School City</small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Location:</strong></p>
                                                <select name="school_area" class="form-control">
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
                                                <p><small>Please select school area</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab school_contact_detail">
                                        <h4>School Contact Details:</h4>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>School Phone (LandLine):</strong></p>
                                                <input placeholder="School Phone Number.." oninput="this.className = 'form-control '" name="school_phone"  class="form-control" value="021-3">
                                                <p><small>Please enter your school Landline telephone..</small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>School Email:</strong></p>
                                                <input placeholder="School Email Address.." oninput="this.className = 'form-control '" name="school_email"  class="form-control">
                                                <p><small>Please enter your school official email address..</small></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>School Social & Website Details:</h4>
                                        <div class="row">
                                                <div class="col">
                                                    <p><strong>Website Link:</strong></p>
                                                    <input placeholder="Website Link..." oninput="this.className = 'form-control '" name="school_website_link"  class="form-control">
                                                    <p><small>Example: <strong>https://www.kpsguide.pk</strong></small></p>
                                                </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Facebook Page Link:</strong></p>
                                                <input placeholder="Enter Facebook Page Link" oninput="this.className = 'form-control '" name="school_fb_link"  class="form-control">
                                                <p><small>Example: <strong>https://www.facebook.com/karachiparentsguide/</strong></small></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p><strong>Twitter Page Link:</strong></p>
                                                <input placeholder="Enter Twitter Page Link" oninput="this.className = 'form-control '" name="school_twitter_link"  class="form-control">
                                                <p><small>Example: <strong>https://</strong></small></p>
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

                                    <div style="overflow:auto; margin: 30px 0 0 ;">
                                        <div style="float:right;">
                                            <button type="button" id="prevBtn" class="btn btn-primary" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" class="btn btn-primary" onclick="nextPrev(1)">Next</button>
                                            <button type="submit" id="submit" class="btn btn-primary" style="display: none" name="submit">ubmit</button>
                                        </div>
                                    </div>
                                    <!-- Circles which indicates the steps of the form: -->
                                    <div style="text-align:center;margin-top:40px;">
                                        <span class="step"></span>
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
<?php include '../includes/footer.php'; ?>


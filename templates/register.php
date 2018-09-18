
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
                                    <h1>Register:</h1>
                                    <!-- One "tab" for each step in the form: -->
                                    <div class="tab school_account_info"><h4>Account Information:</h4>
                                        <input placeholder="First name..." oninput="this.className = ''" name="first_name">
                                        <p><small></small></p>
                                        <input placeholder="Last name..." oninput="this.className = ''" name="last_name">
                                        <p><small></small></p>
                                        <hr>
                                        <input placeholder="E-mail..." oninput="this.className = ''" name="email">
                                        <p><small>Email address should be your login id</small></p>
                                        <input placeholder="Password..." oninput="this.className = ''" name="password" type="password">
                                        <p><small></small></p>
                                        <input name="user_type" value="school" type="hidden">
                                    </div>
                                    <div class="tab school_info"><h4>School Information:</h4>
                                        <input placeholder="School name..." oninput="this.className = ''" name="school_name">
                                        <p><small>Main Branch or Franchise name...</small></p>
                                        <input placeholder="School Type..." oninput="this.className = ''" name="school_type">
                                        <p><small>Example: O Level, Alevel, Matric System etc...</small></p>
                                        <input placeholder="Montessori Sytem (ex: AMI, LMI etc)..." oninput="this.className = ''" name="school_mont_system">
                                        <p><small>Example: AMI, LMI etc...</small></p>
                                        <input placeholder="Total students in school..." oninput="this.className = ''" name="school_enrolled_students">
                                        <p><small>Example: 200 students  etc...</small></p>
                                        <input placeholder="School Grades..." oninput="this.className = ''" name="school_grade">
                                        <p><small>Example: Montessorri to 10 Grade or 1-10 Grade..</small></p>
                                        <textarea placeholder="School description..." oninput="this.className = ''" name="school_decription"></textarea>
                                        <p><small>Example: Add school detail description..</small></p>
                                        <hr>
                                        <span class="chck-box-format">
                                            <input oninput="this.className = ''" name="school_special_child" type="checkbox" class="checkbox-inline" value="1"> <label><strong>Special Child</strong></label>
                                            <input oninput="this.className = ''" name="school_main_campus" type="checkbox" value="1"> <label><strong>Is this main Campus?</strong></label>
                                            <input oninput="this.className = ''" name="school_branches" type="checkbox" value="1"> <label><strong>Is there any School Branches?</strong></label>
                                        </span>
                                    </div>
                                    <div class="tab school_address"><h4>School Address:</h4>
                                        <select name="school_city" >
                                            <option value="karachi">Karachi</option>
                                        </select>
                                        <select name="school_area" >
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
                                        <input placeholder="School name..." oninput="this.className = ''" name="school_address">
                                        <p><small>Please enter complete School address</small></p>
                                    </div>
                                    <div class="tab school_contact_detail"><h4>School Contact Details:</h4>
                                        <input placeholder="School name..." oninput="this.className = ''" name="school_phone">
                                        <p><small>Please enter your school Landline telephone..</small></p>
                                        <input placeholder="School name..." oninput="this.className = ''" name="school_email">
                                        <p><small>Please enter your school offical email address..</small></p>
                                        <hr>
                                        <input placeholder="School name..." oninput="this.className = ''" name="school_fb_link">
                                        <p><small>Please enter your facbeook page link..</small></p>
                                        <input placeholder="School name..." oninput="this.className = ''" name="school_webiste_link">
                                        <p><small>Please enter your school website link..</small></p>
                                        <input placeholder="School name..." oninput="this.className = ''" name="school_twitter_link">
                                        <p><small>Please enter your facbeook page link</small></p>
                                    </div>
                                    <div class="tab school_survey">
                                        <h4>Survey:</h4>
                                        <p>Please answer the following question. </p>

                                        <p><strong>Q1: Why you want to join our website?</strong></p>
                                        <textarea placeholder="Answer Q1:" oninput="this.className = ''" name="question_1"></textarea>
                                        <p><small></small></p>

                                        <p><strong>Q2: Do you have Website presence?</strong></p>
                                        <textarea placeholder="Answer Q2:" oninput="this.className = ''" name="question_2"></textarea>
                                        <p><small></small></p>
                                        <p><strong>Q3: Are you interested in promotional activities?</strong></p>
                                        <textarea placeholder="Answer Q3: Printing Stationary, Facebook marketing, etc." oninput="this.className = ''"  name="question_3"></textarea>
                                        <p><small></small></p>

                                    </div>

                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
                                            document.getElementById("nextBtn").innerHTML = "Submit";
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


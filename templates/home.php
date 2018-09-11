<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/10/2018
 * Time: 3:38 PM
 */
include '../includes/header.php'; ?>
<style> .header_search_container { display:none;}</style>
<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(../images/home_slider_1.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title"></div>
                                <div class="home_slider_subtitle"></div>
                                <div class="home_slider_form_container">
                                    <form action="search.php" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between" method="post">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <select name="search_type" id="search_type" class="dropdown_item_select home_search_input"  onchange="update_value(this.options[selectBox.selectedIndex].title);">
                                                <option title="schools" value="schools">Schools</option>
                                                <option title="parenting" value="parenting">Parenting</option>
                                                <option title="teachers" value="teachers">Teachers</option>
                                            </select>
                                            <select name="search_area" id="search_area" class="dropdown_item_select home_search_input">
                                                <option>All Location</option>
                                                <option value="north">North</option>
                                                <option value="nazimabad">Nazimabad</option>
                                            </select>
                                            <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                        </div>
                                        <button type="submit" name='keyword_srch' class="home_search_button">search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script  type="text/javascript">
                var selectBox = document.getElementById("search_type");
                var selectedValue =  selectBox.options[selectBox.selectedIndex].value;

                update_value(selectedValue);
                function update_value(val) {
                    var xhttp;
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (xhttp.readyState == 4 || xhttp.status == 200){
                            document.getElementById('search_type_form').innerHTML =xhttp.responseText ;
                        }
                    }

                    xhttp.open('GET', encodeURI('search_type.php?value='+val), true)
                    xhttp.send();
                }
            </script>

            <!-- Home Slider Item -->
<!--            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">The Premium System Education</div>
                                <div class="home_slider_subtitle">Future Of Education Technology</div>
                                <div class="home_slider_form_container">
                                    <form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                            <select class="dropdown_item_select home_search_input">
                                                <option>Category Courses</option>
                                                <option>Category</option>
                                                <option>Category</option>
                                            </select>
                                            <select class="dropdown_item_select home_search_input">
                                                <option>Select Price Type</option>
                                                <option>Price Type</option>
                                                <option>Price Type</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="home_search_button">search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->



        </div>
    </div>

    <!-- Home Slider Nav -->

    <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>

<?php  include "../includes/footer.php";?>

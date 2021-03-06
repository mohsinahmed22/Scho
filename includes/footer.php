
<!-- Footer -->

<footer class="footer">
    <div class="footer_background" style="/*background-image:url(images/footer_background.png)*/"></div>
    <div class="container">
        <div class="row footer_row">
            <div class="col">
                <div class="footer_content">
                    <div class="row">

                        <div class="col-lg-3 footer_col">
                            <!-- Footer About -->
                            <div class="footer_section footer_about">
                                <div class="footer_logo_container">
                                    <a href="#">
                                        <div class="footer_logo_text"><span></span></div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                                </div>
                                <div class="footer_social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 footer_col">

                            <!-- Footer Contact -->
                            <div class="footer_section footer_contact">
                                <div class="footer_title">Contact Us</div>
                                <div class="footer_contact_info">
                                    <ul>
                                        <li>Email: <?php  echo PORTAL_EMAIL?></li>
                                        <li>Phone:  +(92) <?php  echo PORTAL_PHONE ?></li>
                                        <li>None</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 footer_col">

                            <!-- Footer links -->
                            <div class="footer_section footer_links">
                                <div class="footer_title">Contact Us</div>
                                <div class="footer_links_container">
                                    <ul>
                                        <li><a href="<?php echo BASE_URI?>">Home</a></li>
                                        <li><a href="<?php echo BASE_URI?>aboutus">About</a></li>
                                        <li><a href="<?php echo BASE_URI?>contact">Contact</a></li>
                                        <li><a href="<?php echo BASE_URI?>blog">Blog</a></li>
                                        <li><a href="<?php echo BASE_URI?>schools">Schools</a></li>
                                        <li><a href="<?php echo BASE_URI?>downloads">Downloads</a></li>
                                        <li><a href="<?php echo BASE_URI?>teachers">Teachers</a></li>
                                        <li><a href="<?php echo BASE_URI?>jobs">School Jobs</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 footer_col clearfix">

                            <!-- Footer links -->
                            <div class="footer_section footer_mobile">
                                <div class="footer_title">Mobile</div>
                                <div class="footer_mobile_content">
                                    <div class="footer_image"><a href="#"><img src="<?php echo BASE_URI?>images/mobile_1.png" alt=""></a></div>
                                    <div class="footer_image"><a href="#"><img src="<?php echo BASE_URI?>images/mobile_2.png" alt=""></a></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row copyright_row">
            <div class="col">
                <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    <div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    <div class="ml-lg-auto cr_links">
                        <ul class="cr_list">
                            <li><a href="#">Copyright notification</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?php echo BASE_URI?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo BASE_URI?>styles/bootstrap4/popper.js"></script>
<script src="<?php echo BASE_URI?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo BASE_URI?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo BASE_URI?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo BASE_URI?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo BASE_URI?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo BASE_URI?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo BASE_URI?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo BASE_URI?>plugins/easing/easing.js"></script>
<script src="<?php echo BASE_URI?>plugins/parallax-js-master/parallax.min.js"></script>
<!-- <script src="<?php // echo BASE_URI?>admin365/assets/src/bootstrap-wysiwyg.js"></script> -->
<script src="<?php echo BASE_URI?>plugins/masonry/masonry.js"></script>
<script src="<?php echo BASE_URI?>js/blog.js"></script>
<script src="<?php echo BASE_URI?>js/custom.js"></script>

<!--<script src="js/jquery-3.0.0.js" type="text/javascript"></script>-->
<script src="<?php echo BASE_URI?>js/jquery.barrating.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('.rating').barrating({
            theme: 'fontawesome-stars',
            onSelect: function(value, text, event) {

                // Get element id by data-id attribute
                var el = this;
                var el_id = el.$elem.data('id');

                // rating was selected by a user
                if (typeof(event) !== 'undefined') {

                    var split_id = el_id.split("_");

                    var postid = split_id[1];  // postid

                    // AJAX Request
                    $.ajax({
                        url: 'rating_ajax.php',
                        type: 'post',
                        data: {postid:postid,rating:value},
                        dataType: 'json',
                        success: function(data){
                            // Update average
                            var average = data['averageRating'];
                            $('#avgrating_'+postid).text(average);
                        }
                    });
                }
            }
        });
    });

</script>


</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/20/2018
 * Time: 12:36 PM
 */
?>
<?php  include "../../includes/header.php";?>
<div class="home kpsg-jobs">
    <div class="job-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Find a School Job you <span style="color: red"><i class="fa fa-heart"></i></span></h1>

                </div>
            </div>
        </div>
        <div class="job-search-bar">
            <div class="container">
                <div class="row">
                    <form action="<?php echo BASE_URI ?>jobs" method="post">
                        <div class="col-sm-5"><input type="text" placeholder="Jobs Title, Designation etc." class="form-control" name="job_title"></div>
                        <div class="col-sm-3">
                            <select name="school_area" class="form-control" >

                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php  include "../../includes/footer.php";?>

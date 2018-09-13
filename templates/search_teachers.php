<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 2:54 PM
 */
include '../includes/header.php'; ?>
    <div class="search home tutors">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 title-cont">
                        <h1>Search Result in "<?php echo $keyword ?>" </h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="top_header_sub">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            Famous Search: <a href="#">Clifton</a> , <a href="#">North Nazimabad</a> , <a href="#">PECHS</a> ,<a href="#">Malir</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php
                        $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
                        foreach($crumbs as $crumb){
                            echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' > ');
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="search_results">
            <div class="container">
                <div class="row toolbar-section">
                    <div class="col-sm-12">
                        <p><strong>Showing 1 to 25 of 81 schools found in <?php echo $keyword ?></strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 search-results-section">
                        <table width="100%" class="table-search-section table table table-responsive table-bordered table-hover table-striped">
                            <thead>
                            <tr class="text-center center-block">
                                <th width="15%"></th>
                                <th width="35%">Teachers</th>
                                <th width="10%">Area</th>
                                <th width="10%">Job Status</th>
                                <th width="10%">Tuition Availability</th>
s                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($tutors as $tutor):?>
                                <tr class="">
                                    <td><?php echo $tutor->tutor_avatar ;?></td>
                                    <td><h2><?php echo $tutor->tutor_name;?></h2>
                                        <?php echo $tutor->tutor_description?>
                                    </td>
                                    <td><?php echo $tutor->tutor_area ;?></td>
                                    <td><?php echo $tutor->job_status ;?></td>
                                    <td><?php echo $tutor->tutor_tuition_avail;?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">

                    </div>

                </div>
            </div>
        </div>

    </div>




<?php  include "../includes/footer.php";?>
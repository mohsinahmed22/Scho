<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 2:54 PM
 */
include '../includes/header.php'; ?>
<div class="search home">
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 title-cont">
                    <h1>Search Result in "<?php echo $area; ?>" </h1>
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
                    <p><strong>Showing 1 to 25 of 81 schools found in <?php $_POST['search_area'] ?></strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 search-results-section">
                    <table width="100%" class="table-search-section table table table-responsive table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center center-block">
                                <th width="10%"></th>
                                <th width="25%">School</th>
                                <th width="10%">Area</th>
                                <th width="10%">Type</th>
                                <th width="5%">Grade</th>
                                <th width="10%">Enrolled Students</th>
                                <th width="10%">Review</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($schools as $school):?>
                            <tr class="">
                                <td><?php echo $school->school_avatar ;?></td>
                                <td><?php echo $school->school_name ;?></td>
                                <td><?php echo $school->school_area ;?></td>
                                <td><?php echo $school->school_type ;?></td>
                                <td><?php echo $school->school_grade ;?></td>
                                <td><?php echo $school->school_enrolled_students ;?></td>
                                <td><?php ?></td>
                                <td><a href="profile.php?id=<?php echo $school->id ?>">View Profile</a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
<?php  include "../includes/footer.php";?>


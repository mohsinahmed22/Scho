<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 2:55 PM
 */
include '../includes/header.php'; ?>
    <div class="search home download">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 title-cont">
                        <h1>Search Result in "<?php echo $downloads ?>" </h1>
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
                        <p><strong>Showing 1 to 25 of 81 downloads found in <?php echo $downloads ?></strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 search-results-section">
                        <table width="100%" class="table-search-section table table table-responsive table-bordered table-hover table-striped">
                            <thead>
                            <tr class="text-center center-block">
                                <th width="65%">Download Title</th>
                                <th width="15%">Categories</th>
                                <th width="15%">Posts Name</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($downloads as $download):?>
                                <tr class="">
                                    <td><?php echo $download->download_title ;?></td>
                                    <td><?php echo $download->download_categories;?></td>
                                    <td><?php echo $download->post_id ;?></td>
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
<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 2:55 PM
 */
include '../includes/header.php'; ?>
    <div class="search">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 title-cont">
                        <h1>Search Result in "<?php $_POST['search_area'] ?>" </h1>
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
            home :
            <?php
            $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
            foreach($crumbs as $crumb){
                echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
            }
            ?>
        </div>
    </div>
<?php  include "../includes/footer.php";?>
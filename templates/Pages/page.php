<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/12/2018
 * Time: 12:56 PM
 */

include '../includes/header.php'; ?>
<div class="home  kpsg-schools">
    <div class="heading_title">
        <div class="container">
            <div class="col-sm-12">
                <h1><?php echo $displayPage[0]->page_title?></h1>
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
    <div class="kpsg-page">

        <div class="container">
            <?php if($_GET['page_url'] == 'aboutus'):?>
                <div class="col-sm-12">
                    <?php echo $displayPage[0]->page_description?>
                </div>
            <?php else:?>
            <div class="col-sm-8">
                <?php echo $displayPage[0]->page_description?>
            </div>
            <div class="col-sm-4">
                <?php    ?>
            </div>
            <?php endif;?>
        </div>


    </div>
</div>
<style>
    .heading_title{padding: 30px 0 ; background: #15314E; color: #fff;}
    .heading_title h1{color: #fff;}
</style>


<?php include '../includes/footer.php'; ?>

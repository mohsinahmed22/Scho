<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/12/2018
 * Time: 12:56 PM
 */

include '../includes/header.php'; ?>
<div class="home  kpsg-schools">
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
<?php // var_dump($tg);?>
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1><?php echo $displayPost[0]->post_title?></h1>
                </div>
                <!-- Blog Content -->
                <div class="col-lg-8">

                    <div class="blog_content">
                        <div class="blog_title"></div>
                        <div class="blog_meta">
                            <ul>
                                <li><strong>Post on:</strong> <a href="#"><?php echo $displayPost[0]->post_date ?></a></li>
                                <li><strong>By:</strong> <?php echo $userDetails->first_name; ?> <?php echo $userDetails->last_name; ?></li>
                            </ul>
                        </div>
                        <img src="<?php echo BASE_URI ?>images/blog/<?php echo (!empty($displayPost[0]->post_featured_img))? $displayPost[0]->post_featured_img : 'dumy_img.jpg'?>" alt="">
                        <br>
                        <?php echo $displayPost[0]->post_description?>
                    </div>
                    <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                        <div class="blog_tags">
                            <strong>Tags: </strong>
                            <ul class="list-inline" style="display: inline;">
                                <?php
                                $tags= explode(',', $displayPost[0]->posts_tags);
                                foreach ($tags as $tag):?>
                                    <li class="list-inline" style="display: inline;"><a href="<?php echo BASE_URI?>^blog/posts/tags/<?php echo $tag->tags_url?>"><?php echo $tag?></a>, </li>
                                <?php endforeach;?>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4">
                    <?php include '../includes/blogsidebar.php'?>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .heading_title{padding: 30px 0 ; background: #15314E; color: #fff;}
    .heading_title h1{color: #fff;}
</style>


<?php include '../includes/footer.php'; ?>

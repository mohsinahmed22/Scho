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
    <div class="blog">
        <?php print_r($displayAllPosts)?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog_post_container">

                        <?php foreach ($displayAllPosts as $posts):?>
                        <!-- Blog Post -->
                        <div class="blog_post trans_200">
                            <div class="blog_post_image"><a href="<?php echo BASE_URI ?>blog/posts/<?php echo $posts->id ?>/<?php echo $posts->post_url ?>"><img src="<?php echo BASE_URI ?>images/blog/<?php echo (!empty($posts->post_featured_img))? $posts->post_featured_img : 'dumy_img.jpg'?>" alt=""></a></div>
                            <div class="blog_post_body">
                                <div class="blog_post_title"><a href="<?php echo BASE_URI ?>blog/posts/<?php echo $posts->id ?>/<?php echo $posts->post_url ?>"><?php echo $posts->post_title ?></a></div>
                                <div class="blog_post_meta">
                                    <ul>
                                        <li><a href="#"><?php echo $posts->first_name  ?> <?php echo $posts->last_name  ?></a></li>
                                        <li><a href="#"><?php echo $posts->post_date  ?></a></li>
                                    </ul>
                                </div>
                                <div class="blog_post_text">
                                    <p><?php echo substr($posts->post_description,0,30)  ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="load_more trans_200"><a href="#">load more</a></div>
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

<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/12/2018
 * Time: 11:43 AM
 */

include 'admin365/core/init.php';

$posts = new Posts();
if(isset($_GET['post_id'])):
    $template = new Templates('templates/single_post.php');
    $displayPost = $posts->SelectPostsById($_GET['post_id']);
    if(!empty($displayPost)):

        $template->displayPost = $displayPost;
    else:
        redirect(BASE_URI ."blog");
    endif;

else:
    $displayAllPosts = $posts->SelectAllPosts();
    $template = new Templates('templates/posts.php');
    if(!empty($displayAllPosts)):
        $template->displayAllPosts = $displayAllPosts;
    else:
        redirect("404.php");
    endif;

endif;

echo  $template;



<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/12/2018
 * Time: 11:43 AM
 */

include 'admin365/core/init.php';

$posts = new Blog();
if(isset($_GET['postid']) AND isset($_GET['posturl'])):
    $template = new Templates('templates/single_post.php');
//    $displayPost = $posts->SelectPostsById($_GET['post_id']);
    $displayPost = $posts->SelectPostsByUrl($_GET['posturl']);
    if(!empty($displayPost)):
        $user = new User();
        $template->userDetails = $user->getUser($displayPost[0]->user_id);
        $template->PostsCategories = $posts->SelectPostCategories();
        $template->displayPost = $displayPost;
        $template->headcss = "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_single.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_single_responsive.css\">";
    else:
        redirect(BASE_URI ."blog");
    endif;
endif;

echo $template;
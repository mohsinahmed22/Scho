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
elseif(isset($_GET['caturl'])):
    $displayAllPosts = $posts->SelectPostsByCategory($_GET['catid']);
    $template = new Templates('templates/posts.php');
    $template->headcss = "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . BASE_URI . "styles/blog.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"" . BASE_URI ."styles/blog_responsive.css\">";
    if(!empty($displayAllPosts)):
        $template->displayAllPosts = $displayAllPosts;

    else:
        redirect("404.php");
    endif;


elseif(isset($_GET['posts_tags'])):
    $template = new Templates('templates/posts.php');
    $template-> headcss= "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_responsive.css\">";
    $displayAllPosts = $posts->SelectPostsByTags($_GET['posts_tags']);
    if(!empty($displayAllPosts)):
        $template->displayAllPosts = $displayAllPosts;

    else:
        redirect("404.php");
    endif;


else:
    $displayAllPosts = $posts->SelectAllPosts();
    $template = new Templates('templates/posts.php');
    $template->headcss = "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_responsive.css\">";
    if(!empty($displayAllPosts)):
        $template->displayAllPosts = $displayAllPosts;
    else:
        redirect("404.php");
    endif;

endif;

echo  $template;



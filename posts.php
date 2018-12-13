<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/12/2018
 * Time: 11:43 AM
 */

include 'admin365/core/init.php';

$posts = new Blog();
if(isset($_GET['post_id'])):
    $template = new Templates('templates/single_post.php');
    $displayPost = $posts->SelectPostsById($_GET['post_id']);
    if(!empty($displayPost)):
        $user = new User();
        $template->userDetails = $user->getUser($displayPost[0]->user_id);
        $template->PostsCategories = $posts->SelectPostCategories();
        $template->displayPost = $displayPost;
        $template->headcss = "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_single.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_single_responsive.css\">";
    else:
        redirect(BASE_URI ."blog");
    endif;
elseif(isset($_GET['posts_category'])):
    $template = new Templates('templates/posts.php');
    $template->headcss = "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_responsive.css\">";
    $displayAllPosts = $posts->SelectPostsByCategory($_GET['post_id']);


elseif(isset($_GET['posts_tags'])):
    $template = new Templates('templates/posts.php');
    $template->headcss = "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"styles/blog_responsive.css\">";
    $displayAllPosts = $posts->SelectPostsByTags($_GET['posts_tags']);

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



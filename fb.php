<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/24/2018
 * Time: 5:54 PM
 */

$page_title = "Facebook page posts";




?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <style>
        .profile-info{
            overflow:hidden;
        }

        .profile-photo{
            float:left;
        }

        .profile-photo img{
            width:40px; height:40px;
        }

        .profile-name{
            float:left; margin:0 0 0 .5em;
        }

        .time-ago{
            color:#999;
        }

        .profile-message{
            margin:1em 0;
        }

        .post-link{
            text-decoration:none;
        }

        .post-content{
            background: #f6f7f9; border: 1px solid #d3dae8; overflow:hidden;
        }

        .post-content img{
            width:100%;
        }

        .post-status{
            margin:.5em; font-weight:bold;
        }

        .post-picture{
            width:25%; float:left;
        }

        .post-info{
            width:70%; float:left; margin:.5em;
        }

        .post-info-name{
            font-weight:bold;
        }

        .post-info-description{
            color:#999;
        }
    </style>
</head>
<body>

<div class="container">
    <div class='col-lg-12'>
        <?php
        echo "<h1 class='page-header'>{$page_title}</h1>";
        // to get 'time ago' text
        function time_elapsed_string($datetime, $full = false) {

            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);

            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;

            $string = array(
                'y' => 'year',
                'm' => 'month',
                'w' => 'week',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'minute',
                's' => 'second',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }

            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }

        $fb_page_id = "1992138387503935";

        $profile_photo_src = "https://graph.facebook.com/1992138387503935/picture?type=square";
        $access_token = "EAAPjhadQgkoBANW5XRDa0JsxvPZCfUpNlZBVk0lGbjLx7wICZCBvepvmqkijSEJb32fhYTyLkAL0paXYpXeybQxfFTBQoTZBD6TpRtgMHKEKf6GlwIUQWMJ2ZBrsIfOkAbCt3eSbIufwyDeF0Kq6V0hAZCNEJyVahq2tHQVDId2wZDZD";
        $fields = "id,message,picture,link,name,description,type,icon,created_time,from,object_id,like";
        $limit = 15;
        $json_link = "https://graph.facebook.com/{$fb_page_id}/feed?access_token={$access_token}&fields={$fields}&limit={$limit}";
        $json = file_get_contents($json_link);
        $obj = json_decode($json, true);
        $feed_item_count = count($obj['data']);

        print_r($obj);

        for($x=0; $x<$feed_item_count; $x++){

            // to get the post id
            $id = $obj['data'][$x]['id'];
            $post_id_arr = explode('_', $id);
            $post_id = $post_id_arr[1];

            // user's custom message
            $message = $obj['data'][$x]['message'];

            // picture from the link
            $picture = $obj['data'][$x]['picture'];
            echo $picture_url_arr = explode('&url=', $picture);
            $picture_url = urldecode($picture_url_arr[0]);
//            print_r($picture_url_arr);

            // link posted
            $link = $obj['data'][$x]['link'];

            // name or title of the link posted
            $name = $obj['data'][$x]['name'];

//            $description = $obj['data'][$x]['description'];
            $type = $obj['data'][$x]['type'];

            // when it was posted
            $created_time = $obj['data'][$x]['created_time'];
            $converted_date_time = date( 'Y-m-d H:i:s', strtotime($created_time));
            $ago_value = time_elapsed_string($converted_date_time);

            // from
            $page_name = $obj['data'][$x]['from']['name'];

            // useful for photo
            $object_id = $obj['data'][$x]['object_id'];





        echo "<div class='row'>";

        echo "<div class='col-md-4'>";

        echo "<div class='profile-info'>";
        echo "<div class='profile-photo'>";
        echo "<img src='{$profile_photo_src}' />";
        echo "</div>";

        echo "<div class='profile-name'>";
        echo "<div>";
        echo "<a href='https://fb.com/{$fb_page_id}' target='_blank'>{$page_name}</a> ";
        echo "shared a ";
        if($type=="status"){
            $link="https://www.facebook.com/{$fb_page_id}/posts/{$post_id}";
        }
        echo "<a href='{$link}' target='_blank'>{$type}</a>";
        echo "</div>";
        echo "<div class='time-ago'>{$ago_value}</div>";
        echo "</div>";
        echo "</div>";

        echo "<div class='profile-message'>{$message}</div>";
        echo "</div>";
        echo "</div>";
        echo "<hr />";




        echo "<div class='col-md-8'>";
        echo "<a href='{$link}' target='_blank' class='post-link'>";

        echo "<div class='post-content'>";

        if($type=="status"){
            echo "<div class='post-status'>";
            echo "View on Facebook";
            echo "</div>";
        }

        else if($type=="photo"){
            echo "<img src='https://graph.facebook.com/{$object_id}/picture' />";
        }

        else{
            if($picture_url){
                echo "<div class='post-picture'>";
                echo "<img src='{$picture_url}' />";
                echo "</div>";
            }

            echo "<div class='post-info'>";
            echo "<div class='post-info-name'>{$name}</div>";
            echo "<div class='post-info-description'>{$description}</div>";
            echo "</div>";
        }

        echo "</div>";
        echo "</a>";
        echo "</div>";
        }
        ?>



        <!-- page feed code will be here -->

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</body>
</html>

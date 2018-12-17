<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/13/2018
 * Time: 4:20 PM
 */

?>


<div class="sidebar">
    <!-- Categories -->
    <br>

    <div class="sidebar_section">
        <div class="sidebar_section_title"><h4>Categories</h4>
            <hr/>
        </div>
        <div class="sidebar_categories">
            <ul class="categories_list">
                <?php foreach ($PostsCategories as $category):?>
                <li><a href="<?php echo BASE_URI?>blog/<?php echo $category->category_url?>/<?php echo $category->id?>" class="clearfix"><?php echo $category->category_title?><span>()</span></a><hr/>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <br/>
    <!-- Tags -->
    <div class="sidebar_section" style="display: none;">
        <div class="sidebar_section_title"><h4>Tags</h4>
            <hr/></div>
        <div class="sidebar_tags hide">
            <ul class="tags_list">

                <?php //  print_r($PostsTags)?>
                <?php foreach ($PTags as $t):?>
                    <li><a href="<?php echo BASE_URI?>^blog/posts/tags/<?php echo $t->id?>/<?php echo $t->tags_url?>" class="clearfix"><?php echo $t->tags?><span>()</span></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>

    <!-- Banner -->
    <!--<div class="sidebar_section">
        <div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
            <div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
            <div class="sidebar_banner_overlay"></div>
            <div class="sidebar_banner_content">
                <div class="banner_title">Free Book</div>
                <div class="banner_button"><a href="#">download now</a></div>
            </div>
        </div>
    </div>-->

</div>

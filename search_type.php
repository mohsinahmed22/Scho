<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 12:16 PM
 */

$search_type = $_GET['value'];

    if($search_type === 'parenting'){
    ?>

    <select class="dropdown_item_select home_search_input">
    <option>Select Price Type</option>
    <option>Price Type</option>
    <option>Price Type</option>
    </select>
    <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">

<?php
    }else{
        echo $search_type;
    }
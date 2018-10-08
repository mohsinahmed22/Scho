<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 5/15/2018
 * Time: 11:44 AM
 */


function redirect($location){
    header("Location: ". $location);
    exit();
}

function page_counter($uid,$pid){
    $db = new Database();
    $db->query('UPDATE page_counter SET counter = counter + 1 where user_id = :uid and page_id = :pid');
    $db->bind(':uid', $uid);
    $db->bind(':pid', $pid);

    if ($db->execute()){
        return $db->last_insert_id();
    }else{
        return false;
    }
}
function add_page_counter($uid,$pid){
    $db = new Database();
    $db->query('INSERT INTO page_counter (user_id, page_id) values (:uid, :pid)');
    $db->bind(':uid', $uid);
    $db->bind(':pid', $pid);

    if ($db->execute()){
        return $db->last_insert_id();
    }else{
        return false;
    }
}
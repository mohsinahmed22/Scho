<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 10/8/2018
 * Time: 2:52 PM
 */

class Schools extends User{

    /**
     * @var Database
     */
    private $db;

    function __construct()
    {
        parent::__construct();
    }



    public function AddteacherToSchool($tutor_id, $school_id, $user_id){
        $this->db->query("INSERT INTO school_teachers 
                                (user_id, school_profile_id, tutor_profile_id) values (:uid, :sid, :tid)");
        $this->db->bind(":uid", $user_id);
        $this->db->bind(":tid", $tutor_id);
        $this->db->bind(":sid", $school_id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function deleteSchoolTeacher($stid){
        $this->db->query("DELETE FROM school_teachers WHERE id = :id ");
        $this->db->bind(":id", $stid);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function UpdateSchoolInfo($data){
        $this->db->query("
                                UPDATE school_profile set 
                                school_name = :school_name,                                 
                                school_phone = :school_phone,                               
                                school_email = :school_email,                               
                                school_address = :school_address,                               
                                school_fb_link = :school_fb_link,                                
                                school_twitter_link = :school_twitter_link,                               
                                school_website_link = :school_website_link,                                
                                school_city = :school_city,                               
                                school_area = :school_area,                                
                                school_description = :school_description 
                                where id = :sid
                                ");
        $this->db->bind(':sid', $data['sid']);
        $this->db->bind(':school_name', $data['school_name']);
        $this->db->bind(':school_phone', $data['school_phone']);
        $this->db->bind(':school_email', $data['school_email']);
        $this->db->bind(':school_address', $data['school_address']);
        $this->db->bind(':school_fb_link', $data['school_fb_link']);
        $this->db->bind(':school_twitter_link', $data['school_twitter_link']);
        $this->db->bind(':school_website_link', $data['school_website_link']);
        $this->db->bind(':school_city', $data['school_city']);
        $this->db->bind(':school_area', $data['school_area']);
        $this->db->bind(':school_description', $data['school_description']);
        if($this->db->execute()){
            if($this->UpdateSchoolFeatures($data)){
                return true;
            }
        }else{
            return false;
        }
    }

    public function UpdateSchoolFeatures($data){
        $this->db->query("
                                UPDATE school_features set 
                                school_main_campus = :school_main_campus,                                 
                                school_special_child = :school_special_child,                               
                                school_branches = :school_branches,                               
                                school_type = :school_type,                               
                                school_grade = :school_grade,                                
                                school_enrolled_students = :school_enrolled_students,                               
                                school_mont_system = :school_mont_system,                                
                                map_latitute = :map_latitute,                               
                                map_longtitute = :map_longtitute,                                
                                fb_page_acesskey = :fb_page_acesskey,
                                fb_pageid = :fb_pageid 
                                where  school_profile_id = :sid
                                ");
        $this->db->bind(':sid', $data['sid']);
        $this->db->bind(':school_main_campus', $data['school_main_campus']);
        $this->db->bind(':school_special_child', $data['school_special_child']);
        $this->db->bind(':school_branches', $data['school_branches']);
        $this->db->bind(':school_type', $data['school_type']);
        $this->db->bind(':school_grade', $data['school_grade']);
        $this->db->bind(':school_enrolled_students', $data['school_enrolled_students']);
        $this->db->bind(':school_mont_system', $data['school_mont_system']);
        $this->db->bind(':map_latitute', $data['map_latitute']);
        $this->db->bind(':map_longtitute', $data['map_longtitute']);
        $this->db->bind(':fb_page_acesskey', $data['fb_page_acesskey']);
        $this->db->bind(':fb_pageid', $data['fb_pageid']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }





}
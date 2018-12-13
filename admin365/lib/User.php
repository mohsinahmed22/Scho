<?php

/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 5/15/2018
 * Time: 11:51 AM
 */
class User
{
    /**
     * @var Database
     */
    private $db;


    /**
     * @var int
     */
    public $logged = 0;


    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
        $this->check_login();
    }


    /** Login and Logout Section  */

    /**
     * Check Login and Set Session Data
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($data){
        $this->db->query("SELECT * FROM users WHERE 
                                 email = :email AND 
                                 password =:password
                                 ");
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', md5($data['password']));
        $row = $this->db->single();

        if($this->db->rowCount()> 0 and $row->active == 1){
            $this->setUserData($row);
            return true;
        }else{
            return false;
        }
    }

    /**
     * Set Session Data after Login
     * @param $row
     */

    public function setUserData($row)
    {
        $this->logged = 1;
        $_SESSION['uid'] = $row->id;
        $_SESSION['email'] = $row->email;
        $_SESSION['user_type'] = $row->user_type;
        $_SESSION['first_name'] = $row->first_name;
        $_SESSION['last_name'] = $row->last_name;

    }


    /**
     * Check Login Status
     * @return int
     */
    public  function is_loggedin(){
        return $this->logged;
    }


    /**
     * Check Login Status
     */
    private function check_login()
    {
        if (isset($_SESSION['uid'])) {
            $this->user_id = $_SESSION['uid'];
            $this->logged = 1;
        } else {
            $this->logged = 0;
            $this->logout();

        }
    }


    /**
     * Logout
     * @return bool
     */
    public function logout()
    {
        $this->logged = 0;
        unset($_SESSION['uid']);
        unset($_SESSION['email']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        unset($_SESSION['user_type']);
        return true;
    }


    /** User Section */

    /**
     * Select All Users
     * @return mixed
     */
    public function getAllUsers(){
        $query = "SELECT * FROM users ";
        $this->db->query($query);

        $result = $this->db->resultset();
        return $result;
    }


    /**
     * Select Single Users
     * @param $id
     * @return mixed
     */
    public function getUser($id){
        $this->db->query("SELECT * FROM users where id = :id");
        $this->db->bind(':id', $id);

        $result = $this->db->single();
        return $result;
    }


    /**
     * Add New User
     * @param $data
     * @return bool
     */
    public function register($data){
        $verify_hash = md5(rand(200,3000));
        $this->db
            ->query("INSERT INTO users 
                      (password, first_name, last_name, email, user_type, join_date, rate_us, hear_about_us, why_to_join, how_to_improve, testimonials, verify_hash)
                       VALUE (:password, :first_name, :last_name , :email, :user_type, NOW(), :rate_us, :hear_about_us, :why_to_join, :how_to_improve, :testimonials, :verify_hash)");
        $this->db->bind(':verify_hash', $verify_hash);
        $this->db->bind(':password', md5($data['password']));
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':user_type', $data['user_type']);
        $this->db->bind(':rate_us', $data['rate_us']);
        $this->db->bind(':hear_about_us', $data['hear_about_us']);
        $this->db->bind(':why_to_join', $data['why_to_join']);
        $this->db->bind(':how_to_improve', $data['how_to_improve']);
        $this->db->bind(':testimonials', $data['testimonials']);
//        $this->db->bind(':', $data['']);
        if($this->db->execute()){
            $data['uid'] = $this->register_user_id();
            if($data['user_type'] == 'school'){

                if($this->register_school($data)){
                    $this->conformationEmailSent($data['email'], $verify_hash);
                    return true;
                }else{
                    return false;
                }

            }elseif($data['user_type'] == 'teacher'){
                if($this->register_teacher($data)){
                    $this->conformationEmailSent($data['email'], $verify_hash);
                    return true;
                }else{
                    return false;
                }

            }elseif($data['user_type'] == 'parent'){
                if($this->register_parents($data)){
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }


    public function getUserInfo($id, $user_type){
        if($user_type == 'school'):
        $this->db
            ->query('select * from users
                            inner join school_profile profile on users.id = profile.user_id
                            inner join school_features features on features.school_profile_id = profile.id
                            where users.id = ' . $id );
        elseif($user_type == 'teacher'):
            $this->db
                ->query('select * from users
                            inner join tutors_profile profile on users.id = profile.user_id
                            where users.id = ' . $id );
        else:
            $this->db
                ->query('select * from users
                            inner join school_profile profile on users.id = profile.user_id
                            inner join school_features features on features.school_profile_id = profile.id
                            where users.id = ' . $id );
        endif;

        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }

    /**
     * Delete User
     * @param $id
     * @return bool
     */
    public function deleteUser($id){
        $this->db->query("DELETE FROM users WHERE id = :id ");
        $this->db->bind(":id", $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }






    /** School Section */
    /**
     * @param $tutor_id
     * @param $school_id
     * @param $user_id
     * @return bool
     */
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


    /**
     * @param $stid
     * @return bool
     */
    public function deleteSchoolTeacher($stid){
        $this->db->query("DELETE FROM school_teachers WHERE id = :id ");
        $this->db->bind(":id", $stid);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $data
     * @return bool
     */
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
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param $data
     * @return bool
     */
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


    /**
     * @param $data
     * @return bool|string
     */
    public function register_school($data){
        $this->db->query("INSERT INTO school_profile (
                      user_id,
                      school_name, 
                      school_phone,
                      school_email,
                      school_address,
                      school_fb_link,
                      school_twitter_link,
                      school_website_link,
                      school_city,
                      school_area,
                      school_description,
                      school_avatar,
                      school_cover
                      ) VALUES (
                      :uid,
                      :school_name, 
                      :school_phone,
                      :school_email,
                      :school_address,
                      :school_fb_link,
                      :school_twitter_link,
                      :school_website_link,
                      :school_city,
                      :school_area,
                      :school_description,                      
                      :school_avatar,
                      :school_cover
                       )");
        $this->db->bind(':uid', $data['uid']);
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
        $this->db->bind(':school_avatar', 'aa');
        $this->db->bind(':school_cover', 'aa');
//        $this->db->bind(':school_profile_status', 'aa');

        if($this->db->execute()){
            $sid=  $this->register_user_id();
            $this->db
                ->query("INSERT INTO school_features (
                      school_profile_id,
                      school_mont_system,
                      school_type,
                      school_special_child,
                      school_main_campus,
                      school_branches,
                      school_grade,
                      school_enrolled_students
                      ) VALUES (
                      :school_profile_id,
                      :school_mont_system,
                      :school_type,
                      :school_special_child,
                      :school_main_campus,
                      :school_branches,
                      :school_grade,
                      :school_enrolled_students
                      )");

            $this->db->bind(':school_profile_id', $sid);
            $this->db->bind(':school_mont_system', $data['school_mont_system']);
            $this->db->bind(':school_type', $data['school_type']);
            $this->db->bind(':school_special_child', $data['school_special_child']);
            $this->db->bind(':school_main_campus', $data['school_main_campus']);
            $this->db->bind(':school_branches', $data['school_branches']);
            $this->db->bind(':school_grade', $data['school_grade']);
            $this->db->bind(':school_enrolled_students', $data['school_enrolled_students']);
            if($this->db->execute()){
                add_page_counter($data['uid'], $sid);
                return true;
            }else{
                return false;
            }

        }else{
            return false;
        }

    }


    /**
     * @param $id
     * @return array|bool
     */
    public function getSchool($id){
        $this->db
            ->query('select * from users
                            inner join school_profile profile on users.id = profile.user_id
                            inner join school_features features on features.school_profile_id = profile.id
                            where profile.id = ' . $id );
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }

    /**
     * @param $id
     * @return array|bool
     */
    public function getSchoolteachers($id){
        $this->db
            ->query('select *, schoolteacher.id as stid from school_teachers schoolteacher
                            inner join  tutors_profile teacher on teacher.id = schoolteacher.tutor_profile_id
                            where school_profile_id = ' . $id );
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }





    /** Teacher Section */
    /**
     * @param $id
     * @return array|bool
     */
    public function getUserTeacherInfo($id){
        $this->db
            ->query('select * from users
                            inner join tutors_profile profile on users.id = profile.user_id 
                            where users.id = ' . $id );
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }


    /**
     * @param $data
     * @return bool|string
     */
    public function register_teacher($data){
        $this->db
            ->query("INSERT INTO tutors_profile (
                      user_id,
                      tutor_name, 
                      tutor_job_status,
                      tutor_city,
                      tutor_facebook_link,
                      tutor_linkedin,
                      tutor_description,
                      tutor_area,
                      tutor_phone,
                      tutor_where_to_teach,
                      tutor_gender,
                      tutor_age,
                      tutor_experience,
                      tutor_tuition_timing,
                      tutor_cnic,
                      tutor_resume
                      ) VALUES (
                      :uid,
                      :tutor_name, 
                      :tutor_job_status,
                      :tutor_city,
                      :tutor_facebook_link,
                      :tutor_linkedin,
                      :tutor_description,
                      :tutor_area,
                      :tutor_phone,
                      :tutor_where_to_teach,
                      :tutor_gender,
                      :tutor_age,
                      :tutor_experience,
                      :tutor_tuition_timing,
                      :tutor_cnic,
                      :tutor_resume
                       )");
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':tutor_name', $data['first_name'] . " " . $data['last_name'] );
        $this->db->bind(':tutor_job_status', $data['tutor_job_status']);
        $this->db->bind(':tutor_city', $data['tutor_city']);
        $this->db->bind(':tutor_facebook_link', $data['tutor_facebook_link']);
        $this->db->bind(':tutor_linkedin', $data['tutor_linkedin']);
        $this->db->bind(':tutor_description', $data['tutor_description']);
        $this->db->bind(':tutor_area', $data['tutor_area']);
        $this->db->bind(':tutor_phone', $data['tutor_phone']);
        $this->db->bind(':tutor_where_to_teach', implode(', ', $data['tutor_where_to_teach']));
        $this->db->bind(':tutor_gender', $data['tutor_gender']);
        $this->db->bind(':tutor_age', $data['tutor_age']);
        $this->db->bind(':tutor_experience', $data['tutor_experience']);
        $this->db->bind(':tutor_tuition_timing', $data['tutor_tuition_timing']);
        $this->db->bind(':tutor_cnic', $data['tutor_cnic']);
        //Upload Resume
        if($this->resumeupload()){
            $data['tutor_cv'] = $_FILES["tutor_cv"]["name"];
        }
        $this->db->bind(':tutor_resume', $data['tutor_cv']);

//        $this->db->bind(':tutor_avatar', 'aa');
//        $this->db->bind(':tutor_cover', 'aa');
//        $this->db->bind(':tutor_profile_status', 'aa');

        if($this->db->execute()){
            return $this->register_user_id();

        }else{
            return false;
        }

    }

    /**
     * @return bool
     */
    public function resumeupload(){
        $allowedExts = array("gif", "jpeg", "jpg", "png", 'pdf', 'doc', 'docx');
        $temp = explode(".", $_FILES["tutor_cv"]["name"]);
        $extension = end($temp);
        if ((($_FILES["tutor_cv"]["type"] == "image/gif")
                || ($_FILES["tutor_cv"]["type"] == "image/jpeg")
                || ($_FILES["tutor_cv"]["type"] == "image/jpg")
                || ($_FILES["tutor_cv"]["type"] == "application/pdf")
                || ($_FILES["tutor_cv"]["type"] == "application/msword")
                || ($_FILES["tutor_cv"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
                || ($_FILES["tutor_cv"]["type"] == "image/x-png")
                || ($_FILES["tutor_cv"]["type"] == "image/png"))
            && ($_FILES["tutor_cv"]["size"] < 100000)
            && in_array($extension, $allowedExts)) {
            if ($_FILES["tutor_cv"]["error"] > 0) {
                header("Location: register.php");
            } else {
                $date = date('d-m-y');
                if (!file_exists('resume/'. $date)) {
                    mkdir('resume/'. $date, 0777, true);
                }
                if (file_exists("resume/$date/kpsg_" .  $date . "_" . $_FILES["tutor_cv"]["name"])) {
                    header("Location: register.php?error");
                } else {
                    $date = date('d-m-y');
                    if (!file_exists('resume/'. $date)) {
                        mkdir('resume/'. $date, 0777, true);
                    }
                    move_uploaded_file($_FILES["tutor_cv"]["tmp_name"],
                        "resume/$date/kpsg_" .  $date . "_". $_FILES["tutor_cv"]["name"]);
                    return true;
                }
            }
        } else {
            redirect('register.php', 'Invalid File Type!', 'error');
        }
    }

    public  function UpdateTeacherInfo($data){

    }

    public function addQualification($data){
        $this->db->query(
            "INSERT INTO tutors_qualification (
                                    tutors_profile_id,
                                    tutors_qualification_title,
                                    tutors_qualification_year, 
                                    tutors_qualification_description
                                    ) values (
                                    :tid,
                                    :tutors_qualification_title,
                                    :tutors_qualification_year,
                                    :tutors_qualification_description
                                    )
                                    ");
        $this->db->bind(':tid', $data['tid']);
        $this->db->bind(':tutors_qualification_title', $data['tutors_qualification_title']);
        $this->db->bind(':tutors_qualification_year', $data['tutors_qualification_year']);
        $this->db->bind(':tutors_qualification_description', $data['tutors_qualification_description']);

        if($this->db->execute()){
            return $this->register_user_id();

        }else{
            return false;
        }
    }
    public function editQualification($data)
    {
        $this->db->query(
                        "UPDATE tutors_qualification set 
                                tutors_qualification_title = :tutors_qualification_title,
                                tutors_qualification_year = :tutors_qualification_year, 
                                tutors_qualification_description = :tutors_qualification_description
                                where id = :qid"
        );

        $this->db->bind(':qid', $data['qid']);
        $this->db->bind(':tutors_qualification_title', $data['tutors_qualification_title']);
        $this->db->bind(':tutors_qualification_year', $data['tutors_qualification_year']);
        $this->db->bind(':tutors_qualification_description', $data['tutors_qualification_description']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }


    public  function getQualification($tid){
        $this->db->query(
            "SELECT * FROM tutors_qualification where tutors_profile_id = :tid");

        $this->db->bind(':tid', $tid);
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }

    public function GetQualificationById($qid){
        $this->db->query(
            "SELECT * FROM tutors_qualification where id = :qid");

        $this->db->bind(':qid', $qid);
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }

    }


    /**
     * @param $data
     * @return bool|string
     */
    public function addExperience($data){
        $this->db->query(
            "INSERT INTO tutors_experience (
                                    tutors_profile_id,
                                    tutors_experience_job_title,
                                    tutors_experience_job_company, 
                                    tutors_experience_job_date,
                                    tutors_experience_job_description,
                                    tutors_experience_on_job
                                    ) values (
                                    :tid,
                                    :tutors_experience_job_title,
                                    :tutors_experience_job_company, 
                                    :tutors_experience_job_date,
                                    :tutors_experience_job_description,
                                    :tutors_experience_on_job
                                    )
                                    ");
        $this->db->bind(':tid', $data['tid']);
        $this->db->bind(':tutors_experience_job_title', $data['tutors_experience_job_title']);
        $this->db->bind(':tutors_experience_job_company', $data['tutors_experience_job_company']);
        $this->db->bind(':tutors_experience_job_date', $data['tutors_experience_job_date']);
        $this->db->bind(':tutors_experience_job_description', $data['tutors_experience_job_description']);
        $this->db->bind(':tutors_experience_on_job', $data['tutors_experience_on_job']);

        if($this->db->execute()){
            return $this->register_user_id();

        }else{
            return false;
        }

    }

    public function editExperience($data){

        $this->db->query("UPDATE tutors_experience set 
                                    tutors_experience_job_title =:tutors_experience_job_title ,
                                    tutors_experience_job_company =:tutors_experience_job_company, 
                                    tutors_experience_job_date =:tutors_experience_job_date,
                                    tutors_experience_job_description =:tutors_experience_job_description,
                                    tutors_experience_on_job =:tutors_experience_on_job 
                                    where id = :qid ");

        $this->db->bind(':qid', $data['qid']);
        $this->db->bind(':tutors_experience_job_title', $data['tutors_experience_job_title']);
        $this->db->bind(':tutors_experience_job_company', $data['tutors_experience_job_company']);
        $this->db->bind(':tutors_experience_job_date', $data['tutors_experience_job_date']);
        $this->db->bind(':tutors_experience_job_description', $data['tutors_experience_job_description']);
        $this->db->bind(':tutors_experience_on_job', $data['tutors_experience_on_job']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }




    public  function getExperience($tid){
        $this->db->query(
            "SELECT * FROM tutors_experience where tutors_profile_id = :tid");

        $this->db->bind(':tid', $tid);
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }

    public function GetExpeById($qid){
        $this->db->query(
            "SELECT * FROM tutors_experience where id = :qid");

        $this->db->bind(':qid', $qid);
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }

    }



    /** Parents Section */

    /**
     * @param $data
     * @return bool|string
     */
    public function register_parents($data){
        $this->db
            ->query("INSERT INTO parents_profile (
                      user_id,
                      parents_name, 
                      parents_phone,
                      parents_gender,
                      parents_facebook_link,
                      parents_city,
                      parents_area,
                      parents_age,
                      parents_description
                      ) VALUES (
                      :uid,
                      :parents_name, 
                      :parents_phone,
                      :parents_gender,
                      :parents_facebook_link,
                      :parents_city,
                      :parents_area,
                      :parents_age,
                      :parents_description
                      
                       )");
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':parents_name', $data['parents_name']);
        $this->db->bind(':parents_phone', $data['parents_phone']);
        $this->db->bind(':parents_gender', $data['parents_gender']);
        $this->db->bind(':parents_age', $data['parents_age']);
        $this->db->bind(':parents_facebook_link', $data['parents_facebook_link']);
        $this->db->bind(':parents_city', $data['parents_city']);
        $this->db->bind(':parents_area', $data['parents_area']);
        $this->db->bind(':parents_description', $data['parents_description']);

        if($this->db->execute()){
            return $this->register_user_id();

        }else{
            return false;
        }

    }






    /** Accounts Setting */
    /**
     * @return string
     */
     public function register_user_id(){
        return $this->db->last_insert_id();
    }


    /**
     * @param $data
     * @param $uid
     * @return bool
     */
    public function UpdatePassword($data,$uid)
    {
        $this->db->query("UPDATE users set password = :password where id = :uid");
        $this->db->bind(':uid', $uid);
        $this->db->bind(':password', md5($data['password']));
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $data
     * @param $uid
     * @return bool
     */
    public function UpdateAccountInfo($data,$uid)
    {
        $this->db->query("UPDATE users set first_name = :first_name, last_name = :last_name where id = :uid");
        $this->db->bind(':uid', $uid);
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    /** Confirmation Email */

    /**
     * @param $email
     * @param $hash
     * @return bool
     */
    public function confirmEmail($email, $hash)    {
        $this->db->query("select email, verify_hash, active from users  where email = :email and verify_hash = :hash");
        $this->db->bind(':email', $email);
        $this->db->bind(':hash', $hash);
        if($this->db->execute()){
//          return true;
            return $this->activateUser($email, $hash);
        }else{
            return false;
        }
    }

    /**
     * @param $email
     * @param $hash
     * @return bool
     */
    public function activateUser($email, $hash){
        $this->db->query("UPDATE users set active = 1 where email = :email and verify_hash = :hash");
        $this->db->bind(':email', $email);
        $this->db->bind(':hash', $hash);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    /**
     * @param $email
     * @param $hash
     */
    public function conformationEmailSent($email, $hash) {

         redirect(BASE_URI ."verify/$email/$hash");

        $to = $email;
        $subject = "Please Confirm your Email Address $email at KPSG.pk";

        $message = "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Thank You For Registration </title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body style='background: #eee; padding:30px 0 ;'>
    <div class=\"invoice-box\" style='background: #fff; border:1px solid #ccc'>
        <table cellpadding=\"5\" cellspacing=\"0\" >
            <tr class=\"top\">
                <td colspan=\"7\">
                    <table width='100%'>
                        <tr>
                            <td class=\"title\" colspan='3'>
                                
                            </td>
                            
                            <td style='text-align: right' colspan='4'>
                               }</strong><br>
                                <br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class=\"information\">
                <td colspan=\"7\">
                    <table width='100%'>
                        <tr>
                            <td colspan='3'>
                             
                            </td>
                            
                            <td style='text-align: right' colspan='4'>
                               
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
                      
        </table>
    </div>
</body>
</html>
";

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <ahmed.mohsin98@gmail.com>' . "\r\n";
        $headers .= 'Cc: contact@mohsin-ahmed.com' . "\r\n";

        mail($to,$subject,$message,$headers);
    }


    /*    public function getSchoolbranches($id){}

        public function getSchooljobs($id){}*/

}
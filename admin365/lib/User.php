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
        $this->db
            ->query("INSERT INTO users 
                      (password, first_name, last_name, email, user_type, join_date, rate_us, hear_about_us, why_to_join, how_to_improve, testimonials)
                       VALUE (:password, :first_name, :last_name , :email, :user_type, NOW(), :rate_us, :hear_about_us, :why_to_join, :how_to_improve, :testimonials)");
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
                     return true;
                 }else{
                     return false;
                 }

            }elseif($data['user_type'] == 'teacher'){
                if($this->register_teacher($data)){
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

    /**
     * @param $data
     * @return bool|string
     */
    public function register_school($data){
        $this->db
            ->query("INSERT INTO school_profile (
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
                      school_mont_system,
                      school_type,
                      school_special_child,
                      school_main_campus,
                      school_branches,
                      school_grade,
                      school_enrolled_students,
                      school_avatar,
                      school_cover,
                      school_profile_status
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
                      :school_mont_system,
                      :school_type,
                      :school_special_child,
                      :school_main_campus,
                      :school_branches,
                      :school_grade,
                      :school_enrolled_students,
                      :school_avatar,
                      :school_cover,
                      :school_profile_status
                      
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
        $this->db->bind(':school_mont_system', $data['school_mont_system']);
        $this->db->bind(':school_type', $data['school_type']);
        $this->db->bind(':school_special_child', $data['school_special_child']);
        $this->db->bind(':school_main_campus', $data['school_main_campus']);
        $this->db->bind(':school_branches', $data['school_branches']);
        $this->db->bind(':school_grade', $data['school_grade']);
        $this->db->bind(':school_enrolled_students', $data['school_enrolled_students']);
        $this->db->bind(':school_avatar', 'aa');
        $this->db->bind(':school_cover', 'aa');
        $this->db->bind(':school_profile_status', 'aa');

        if($this->db->execute()){
            return $this->register_user_id();

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
                      parents_profile_status,
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
                      :parents_profile_status,
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
        $this->db->bind(':parents_profile_status', $data['parents_profile_status']);
        $this->db->bind(':parents_city', $data['parents_city']);
        $this->db->bind(':parents_area', $data['parents_area']);
        $this->db->bind(':parents_description', $data['parents_description']);

        if($this->db->execute()){
            return $this->register_user_id();

        }else{
            return false;
        }

    }


    /**
     * Check Login and Set Session Data
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($username, $password){
        $this->db->query("SELECT * FROM users WHERE 
                                 username = :username AND 
                                 password =:password
                                 ");
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        $row = $this->db->single();

        if($this->db->rowCount()> 0 ){
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
        $_SESSION['user_id'] = $row->id;
        $_SESSION['admin_username'] = $row->username;
        $_SESSION['admin_first_name'] = $row->first_name;
        $_SESSION['admin_last_name'] = $row->last_name;
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
        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
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
        unset($_SESSION['user_id']);
        unset($_SESSION['admin_username']);
        unset($_SESSION['admin_first_name']);
        unset($_SESSION['admin_last_name']);
        return true;
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


    /**
     * @return string
     */
     public function register_user_id(){
        return $this->db->last_insert_id();
    }


    /*
      * Upload Teacher Resume
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
    public function getUserInfo($id){
        $this->db
            ->query('select * from users
                            inner join school_profile profile on users.id = profile.user_id
                            inner join school_features features on features.school_profile_id = profile.id
                            where users.id = ' . $id );
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }






    public function getSchoolteachers($id){}
    public function getSchoolbranches($id){}

    public function getSchooljobs($id){}
}
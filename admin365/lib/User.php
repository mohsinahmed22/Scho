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
                      (password, first_name, last_name, email, user_type)
                       VALUE (:password, :first_name, :last_name , :email, :user_type)");
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':user_type', $data['user_type']);
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
                $this->register_teacher($data);

            }elseif($data['user_type'] == 'parent'){
                $this->register_parents($data);
            }


        }else{
            return false;
        }
    }

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
                      ) VALUE (
                      :uid
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
                       )");
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':school_name', $data['school_name']);
        $this->db->bind(':school_phone', $data['school_phone']);
        $this->db->bind(':school_email', $data['school_email']);
        $this->db->bind(':school_address', $data['school_address']);
        $this->db->bind(':school_fb_link', $data['school_fb_link']);
        $this->db->bind(':school_twitter_link', $data['school_twitter_link']);
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



     public function register_user_id(){
        return $this->db->last_insert_id();
    }
}
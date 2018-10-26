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


    public function conformationEmailSent($email, $hash) {

         redirect("/toolorb/verify.php?email=$email&&verify=$hash");

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




    public function getUserTeacherInfo($id){
        $this->db
            ->query('select * from users
                            inner join tutors_profile profile on users.id = profile.user_id 
/*                            inner join school_features features on features.school_profile_id = profile.id*/ 
                            where users.id = ' . $id );
        $results = $this->db->resultset();

        if($results){
            return $results;
        }else{
            return false;
        }
    }





    /*    public function getSchoolbranches($id){}

        public function getSchooljobs($id){}*/

}
<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 10/8/2018
 * Time: 3:05 PM
 */

class Teachers extends User{
    /**
     * @var Database
     */
    private $db;


//    function __construct()
//    {
//        parent::__construct();
//    }
//
//
//    /**
//     * @param $data
//     * @return bool|string
//     */
//    public function register_teacher($data){
//        $this->db
//            ->query("INSERT INTO tutors_profile (
//                      user_id,
//                      tutor_name,
//                      tutor_job_status,
//                      tutor_city,
//                      tutor_facebook_link,
//                      tutor_linkedin,
//                      tutor_description,
//                      tutor_area,
//                      tutor_phone,
//                      tutor_where_to_teach,
//                      tutor_gender,
//                      tutor_age,
//                      tutor_experience,
//                      tutor_tuition_timing,
//                      tutor_cnic,
//                      tutor_resume
//                      ) VALUES (
//                      :uid,
//                      :tutor_name,
//                      :tutor_job_status,
//                      :tutor_city,
//                      :tutor_facebook_link,
//                      :tutor_linkedin,
//                      :tutor_description,
//                      :tutor_area,
//                      :tutor_phone,
//                      :tutor_where_to_teach,
//                      :tutor_gender,
//                      :tutor_age,
//                      :tutor_experience,
//                      :tutor_tuition_timing,
//                      :tutor_cnic,
//                      :tutor_resume
//                       )");
//        $this->db->bind(':uid', $data['uid']);
//        $this->db->bind(':tutor_name', $data['first_name'] . " " . $data['last_name'] );
//        $this->db->bind(':tutor_job_status', $data['tutor_job_status']);
//        $this->db->bind(':tutor_city', $data['tutor_city']);
//        $this->db->bind(':tutor_facebook_link', $data['tutor_facebook_link']);
//        $this->db->bind(':tutor_linkedin', $data['tutor_linkedin']);
//        $this->db->bind(':tutor_description', $data['tutor_description']);
//        $this->db->bind(':tutor_area', $data['tutor_area']);
//        $this->db->bind(':tutor_phone', $data['tutor_phone']);
//        $this->db->bind(':tutor_where_to_teach', implode(', ', $data['tutor_where_to_teach']));
//        $this->db->bind(':tutor_gender', $data['tutor_gender']);
//        $this->db->bind(':tutor_age', $data['tutor_age']);
//        $this->db->bind(':tutor_experience', $data['tutor_experience']);
//        $this->db->bind(':tutor_tuition_timing', $data['tutor_tuition_timing']);
//        $this->db->bind(':tutor_cnic', $data['tutor_cnic']);
//        //Upload Resume
//        if($this->resumeupload()){
//            $data['tutor_cv'] = $_FILES["tutor_cv"]["name"];
//        }
//        $this->db->bind(':tutor_resume', $data['tutor_cv']);
//
////        $this->db->bind(':tutor_avatar', 'aa');
////        $this->db->bind(':tutor_cover', 'aa');
////        $this->db->bind(':tutor_profile_status', 'aa');
//
//        if($this->db->execute()){
//            return $this->register_user_id();
//
//        }else{
//            return false;
//        }
//
//    }
//
//    /*
//      * Upload Teacher Resume
//      */
//    public function resumeupload(){
//        $allowedExts = array("gif", "jpeg", "jpg", "png", 'pdf', 'doc', 'docx');
//        $temp = explode(".", $_FILES["tutor_cv"]["name"]);
//        $extension = end($temp);
//        if ((($_FILES["tutor_cv"]["type"] == "image/gif")
//                || ($_FILES["tutor_cv"]["type"] == "image/jpeg")
//                || ($_FILES["tutor_cv"]["type"] == "image/jpg")
//                || ($_FILES["tutor_cv"]["type"] == "application/pdf")
//                || ($_FILES["tutor_cv"]["type"] == "application/msword")
//                || ($_FILES["tutor_cv"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
//                || ($_FILES["tutor_cv"]["type"] == "image/x-png")
//                || ($_FILES["tutor_cv"]["type"] == "image/png"))
//            && ($_FILES["tutor_cv"]["size"] < 100000)
//            && in_array($extension, $allowedExts)) {
//            if ($_FILES["tutor_cv"]["error"] > 0) {
//                header("Location: register.php");
//            } else {
//                $date = date('d-m-y');
//                if (!file_exists('resume/'. $date)) {
//                    mkdir('resume/'. $date, 0777, true);
//                }
//                if (file_exists("resume/$date/kpsg_" .  $date . "_" . $_FILES["tutor_cv"]["name"])) {
//                    header("Location: register.php?error");
//                } else {
//                    $date = date('d-m-y');
//                    if (!file_exists('resume/'. $date)) {
//                        mkdir('resume/'. $date, 0777, true);
//                    }
//                    move_uploaded_file($_FILES["tutor_cv"]["tmp_name"],
//                        "resume/$date/kpsg_" .  $date . "_". $_FILES["tutor_cv"]["name"]);
//                    return true;
//                }
//            }
//        } else {
//            redirect('register.php', 'Invalid File Type!', 'error');
//        }
//    }
}
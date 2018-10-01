<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/24/2018
 * Time: 1:08 PM
 */

class Rating
{

    /**
     * @var Database
     */
    private $db;

    /**
     * Setting constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }


    /**
     * @return array
     */
    public function select_all_rating_questions()
    {
        $this->db->query('select * from school_rating_questions');
        $this->db->execute();

        $results = $this->db->resultset();

        return $results;

    }

    /**
     * @param $id
     * @return array|bool
     */
    public function getSchoolrating($id)
    {
        $this->db
            ->query('select * from school_rating 
                                 where school_profile_id = ' . $id);

        $results = $this->db->resultset();
        if ($results) {
            return $results;
        } else {
            return false;
        }
    }

    public function addAllRating($data)
    {
        $data['review_id'] = $this->addOverAllRating($data);

        for ($x = 1; $x <= count($this->select_all_rating_questions()); $x++) {
            $data['school_rating_question_id'] = $data['q_' . $x];
            $data['school_rating_why_this'] = $data['school_rating_why_this_' . $x];
            $data['school_rating_value'] = $data['rating_' . $x];

            $this->addRating($data);
        }
    }

    public function selectOverAllRating($id){
        $this->db->query('select * from review 
                                 where school_profile_id = ' . $id);
        $results = $this->db->resultset();
        if ($results) {
            return $results;
        } else {
            return false;
        }
    }

    public function selectUserInfo($id){
        $this->db->query('select * from review
                                inner join users profile on review.user_id = profile.id 
                                where school_profile_id = ' . $id);
        $results = $this->db->resultset();
        if ($results) {
            return $results;
        } else {
            return false;
        }
    }



    public function addOverAllRating($data){
        $this->db
            ->query("INSERT INTO review 
              (user_id, school_profile_id, overall_rating, overall_message)   
              values (:user_id, :school_profile_id, :overall_rating, :overall_message)");
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':school_profile_id', $data['school_profile_id']);
            $this->db->bind(':overall_rating', $data['rating']);
            $this->db->bind(':overall_message', $data['school_rating_why_this_7']);

            if($this->db->execute()){
                return $this->db->last_insert_id();

            }else{
                return false;
            }
    }

    public function addRating($data){
        $this->db
            ->query(
                " INSERT INTO school_rating ( 
                  user_id,
                  review_id,
                  school_profile_id,
                  school_rating_question_id,
                  school_rating_value,
                  school_rating_why_this,
                  school_rating_date
                ) VALUES (
                  :user_id,
                  :review_id,
                  :school_profile_id,
                  :school_rating_question_id,
                  :school_rating_value,
                  :school_rating_why_this,
                  now()
                )"
            );

        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':review_id', $data['review_id']);
        $this->db->bind(':school_profile_id', $data['school_profile_id']);
        $this->db->bind(':school_rating_question_id', $data['school_rating_question_id']);
        $this->db->bind(':school_rating_value', $data['school_rating_value']);
        $this->db->bind(':school_rating_why_this', $data['school_rating_why_this']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }



    public function checkUserRating($uid, $school_id){
        $this->db
            ->query("select * from school_rating where user_id = " . $uid ." and school_profile_id  = " . $school_id);

        if($results = $this->db->resultset()){
            return $results;
        }
    }



    public function calculateRating($id){
        for ($x = 1; $x <= 5; $x++){
            $arr[$x] = $this->countRating($x, $id);
        }
        return $arr;
    }


    public function countRating($rating, $id){
        $this->db
            ->query("select COUNT(overall_rating) overall from review where overall_rating = ". $rating ." and school_profile_id = " . $id);

        if($results = $this->db->single()){
            return $results;
        }

    }



}
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
    public function select_all_rating_questions(){
        $this->db->query('select * from school_rating_questions');
        $this->db->execute();

        $results = $this->db->resultset();

        return $results;

    }

    /**
     * @param $id
     * @return array|bool
     */
    public function getSchoolrating($id){
        $this->db
            ->query('select * from school_rating 
                                 where school_profile_id = ' . $id);

        $results = $this->db->resultset();
        if($results){
            return $results;
        }else{
            return false;
        }
    }

    public function addAllRating($data){


        for ($x = 1; $x < count($this->select_all_rating_questions()); $x++){
            $data['school_rating_question_id'] = $data['q_'.$x];
            $data['school_rating_why_this'] = $data['school_rating_why_this_'.$x];
            $data['school_rating_value'] = $data['rating_'.$x];

            print_r($data);
            $results = $this->addRating($data);

        }

        //return $results;
    }

    public function addRating($data){
        $this->db
            ->query(
                " INSERT INTO school_rating ( 
                  user_id,
                  school_profile_id,
                  school_rating_question_id,
                  school_rating_value,
                  school_rating_why_this,
                  school_rating_date
                ) VALUES (
                  :user_id,
                  :school_profile_id,
                  :school_rating_question_id,
                  :school_rating_value,
                  :school_rating_why_this,
                  now()
                )"
            );

        $this->db->bind(':user_id', $data['user_id']);
//        $this->db->bind(':user_type', $data['user_type']);
        $this->db->bind(':school_profile_id', $data['school_profile_id']);
        $this->db->bind(':school_rating_question_id', $data['school_rating_question_id']);
        $this->db->bind(':school_rating_value', $data['school_rating_value']);
        $this->db->bind(':school_rating_why_this', $data['school_rating_why_this']);


        if($this->db->resultset()){
            return true;
        }else{
            return false;
        }

    }






}
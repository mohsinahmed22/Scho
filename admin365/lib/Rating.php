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



    public function select_all_rating_questions(){
        $this->db->query('select * from school_rating_questions');
        $this->db->execute();

        $results = $this->db->resultset();

        return $results;

    }










}
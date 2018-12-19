<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/19/2018
 * Time: 5:41 PM
 */

class Jobs
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


    public function getAllJobs(){

        $this->db->query('select * from jobs');

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }
    }

    public function getJobbyId($jobid){

        $this->db->query('select * from jobs where id = :jobid');
        $this->db->bind(':jobid',$jobid);

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }
    }

    public function getJobApplied($jobid){

        $this->db->query('select * from job_applied where id = :jobid');
        $this->db->bind(':jobid',$jobid);

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }
    }
}
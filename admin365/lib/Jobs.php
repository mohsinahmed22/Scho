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


    public function getAllJobs()
    {

        $this->db->query('select * from jobs');

        if ($results = $this->db->resultset()) {
            return $results;
        } else {
            return false;
        }
    }

    public function getJobbyId($jobid)
    {

        $this->db->query('select * from jobs where id = :jobid');
        $this->db->bind(':jobid', $jobid);

        if ($results = $this->db->resultset()) {
            return $results;
        } else {
            return false;
        }
    }


    /**
     * @param $jobid
     * @return array|bool
     * School Job - Backend
     */
    public function getJobApplicant($sid)
    {

        $this->db->query('select * from job_applied
                                 inner join tutors_profile profile on job_applied.tutor_id = profile.id  where id = :sid');
        $this->db->bind(':sid', $sid);

        if ($results = $this->db->resultset()) {
            return $results;
        } else {
            return false;
        }
    }


    public function CreateJb($data)
    {
        $this->db->query("insert into jobs (school_id, job_title, job_description, job_salary, job_active) values (:school_id, :job_title, :job_description, :job_salary, :job_active)");

        $this->db->bind(':school_id', $data['sid']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':job_description', $data['job_description']);
        $this->db->bind(':school_id', $data['sid']);
    }

}
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

        $this->db->query('select * from jobs where job_active = 1');

        if ($results = $this->db->resultset()) {
            return $results;
        } else {
            return false;
        }
    }

    public function getJobbyId($jobid)
    {

        $this->db->query('select * from jobs where id = :jobid and job_active = 1');
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
    public function getJobApplicant($sid,$jobid)
    {

        $this->db->query('select * from job_applied
                                 inner join tutors_profile profile on job_applied.tutor_id = profile.id  where id = :sid and job_id = :jobid');
        $this->db->bind(':sid', $sid);
        $this->db->bind(':jobid', $jobid);

        if ($results = $this->db->resultset()) {
            return $results;
        } else {
            return false;
        }
    }


    public function CreateJob($data)
    {
        $this->db->query("insert into jobs (school_id, job_title, job_description, job_salary, job_active,job_closed_date) values (:school_id, :job_title, :job_description, :job_salary, :job_active, :job_closed_date)");

        $this->db->bind(':school_id', $data['sid']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':job_description', $data['job_description']);
        $this->db->bind(':job_salary', $data['job_salary']);
        $this->db->bind(':job_active', $data['job_active']);
        $this->db->bind(':school_id', $data['sid']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function UpdateJob($data)
    {
        $this->db->query("update jobs  set school_id = :school_id, job_title = :job_title, job_description = :job_description, job_salary = :job_salary, job_active = :job_active,job_closed_date = :job_closed_date");

        $this->db->bind(':school_id', $data['sid']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':job_description', $data['job_description']);
        $this->db->bind(':job_salary', $data['job_salary']);
        $this->db->bind(':job_active', $data['job_active']);
        $this->db->bind(':school_id', $data['sid']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function DeleteJob($jobid){
        $this->db->query("delete from jobs where id = :jobid");
        $this->db->bind(':job_id', $jobid);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }


    public function ApplyJob($jobid, $tutor_id)
    {
        $this->db->query("insert into job_applied (job_id, tutor_id) values  (:job_id, :tutor_id) ");

        $this->db->bind(':job_id', $jobid);
        $this->db->bind(':tutor_id', $tutor_id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}
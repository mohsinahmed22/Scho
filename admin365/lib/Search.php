<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 9/11/2018
 * Time: 4:53 PM
 */
class Search {
    /**
     * @var  Database
     */
    private  $db;


    /**
     * Search constructor.
     */
    public function __construct()
    {
        $this->db = New Database();
    }

    public function search_all_schools()
    {
        $query = "SELECT * FROM school_profile";
        $this->db->query($query);

        $search = $this->db->resultset();
        return $search;
    }

    /**
     * @param $area
     * @return array Search Result for All School Area
     */
    public function search_schools($area)
    {
        $query = "SELECT * FROM school_profile  WHERE school_area = " . $area ;
        $this->db->query($query);

        $search = $this->db->resultset();
        return $search;
    }


    /**
     * @param $area
     * @return array
     */
    public function search_branches($area)
    {
        $query = "SELECT * FROM school_branches WHERE school_branch_area = " . $area ;
        $this->db->query($query);

        $search = $this->db->resultset();
        return $search;
    }


    /**
     * @param $area
     * @return array
     */
    public function search_teachers($find)
    {
        $query = "SELECT * FROM tutors_profile WHERE tutor_name = " . $find ;
        $this->db->query($query);

        $search = $this->db->resultset();
        return $search;
    }
    /**
     * @param $area
     * @return array
     */
    public function search_all_teachers()
    {
        $query = "SELECT * FROM tutors_profile";
        $this->db->query($query);

        $search = $this->db->resultset();
        return $search;
    }

    /**
     * @param $area
     * @return array
     */
    public function search_jobs()
    {
        $query = "SELECT * FROM school_jobs";
        $this->db->query($query);

        $search = $this->db->resultset();
        return $search;
    }



    public function searchSchoolTeachers($find)
    {
        $query = "SELECT *, t.id tid FROM tutors_profile t
                  inner join users u on u.id = t.user_id 
                  where tutor_name like '%{$find}%' " ;
        $this->db->query($query);

        $search = $this->db->resultset();
        if($search){
            return $search;
        }else{
            return false;
        }

    }
}
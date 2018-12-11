<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/11/2018
 * Time: 12:23 PM
 */

class Pages
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


    public function CreatePage($data){
        $this->db->query("INSERT INTO pages (page_title, page_description, page_url, page_tags, meta_title, meta_description, meta_keyword) values (
page_title, page_description, page_url, page_tags, meta_title, meta_description, meta_keyword) ");

        $this->db->bind(':page_title', $data['page_title']);
        $this->db->bind(':page_description', $data['page_description']);
        $this->db->bind(':page_tags', $data['page_tags']);
        $this->db->bind(':page_is_active', $data['page_is_active']);
        $this->db->bind(':page_status', $data['page_status']);
        $this->db->bind(':page_url', $data['page_url']);
        $this->db->bind(':meta_title', $data['meta_title']);
        $this->db->bind(':meta_keyword', $data['meta_keyword']);
        $this->db->bind(':meta_description', $data['meta_description']);
        $this->db->bind(':page_id', $data['page_id']);


        if($this->db->execute()){
            return $this->db->last_insert_id();
        }else{
            return false;
        }


    }

    public function DeletePage($page_id){
        $this->db->query('DELETE FROM pages where id = :page_id');

        $this->db->bind(':page_id', $page_id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }


    }


    public function EditPage($data){
        $this->db->query(
            "UPDATE pages set 
                      page_title =:page_title,
                      page_description = :page_description,
                      page_tags= :page_tags,
                      page_is_active = :page_is_active,
                      page_status = :page_status,
                      page_url = :page_url,
                      meta_description = :meta_description,
                      meta_keyword = :meta_keyword,
                      meta_title = :meta_title
                      where id = :page_id"
        );

        $this->db->bind(':page_title', $data['page_title']);
        $this->db->bind(':page_description', $data['page_description']);
        $this->db->bind(':page_tags', $data['page_tags']);
        $this->db->bind(':page_is_active', $data['page_is_active']);
        $this->db->bind(':page_status', $data['page_status']);
        $this->db->bind(':page_url', $data['page_url']);
        $this->db->bind(':meta_title', $data['meta_title']);
        $this->db->bind(':meta_keyword', $data['meta_keyword']);
        $this->db->bind(':meta_description', $data['meta_description']);
        $this->db->bind(':page_id', $data['page_id']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }


    }

    public function SelectAllPage(){
        $this->db->query('select * from pages');

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }


    }


    public function SelectPageById($page_id){
        $this->db->query('select * from pages where id= :page_id');

        $this->db->bind(":page_id", $page_id);

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }

    }


}
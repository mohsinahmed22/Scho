<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/11/2018
 * Time: 12:22 PM
 */

class Blog
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
     * @param $data
     * @return bool|string
     */
    public function CreatePosts($data){
        $this->db->query('INSERT INTO posts (user_id, post_title, post_description, posts_tags, post_url, meta_description,meta_keyword,meta_title) values 
                            (:user_id, :post_title, :post_description, :posts_tags, :post_url, :meta_description, :meta_keyword, :meta_title)');

        $this->db->bind(':user_id', $data['uid']);
        $this->db->bind(':post_title', $data['post_title']);
        $this->db->bind(':post_description', $data['post_description']);
        $this->db->bind(':posts_tags', $data['posts_tags']);
        $this->db->bind(':post_url', $data['post_url']);
        $this->db->bind(':meta_description', $data['meta_description']);
        $this->db->bind(':meta_keyword', $data['meta_keyword']);
        $this->db->bind(':meta_title', $data['meta_title']);

        if($this->db->execute()){
            return $this->db->last_insert_id();
        }else{
            return false;
        }

    }

    /**
     * @param $post_id
     * @return bool
     */
    public function DeletePosts($post_id){
        $this->db->query('DELETE FROM posts where id = :post_id');

        $this->db->bind(':post_id', $post_id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    /**
     * @param $data
     * @return bool
     */
    public function EditPosts($data){
        $this->db->query(
            "UPDATE posts set 
                      post_title =:post_title,
                      post_description = :post_description,
                      posts_tags= :posts_tags,
                      post_is_active = :post_is_active,
                      posts_status = :post_status,
                      post_url = :post_url,
                      meta_description = :meta_description,
                      meta_keyword = :meta_keyword,
                      meta_title = :meta_title
                      where id = :post_id"
        );

        $this->db->bind(':user_id', $data['uid']);
        $this->db->bind(':post_title', $data['post_title']);
        $this->db->bind(':post_description', $data['post_description']);
        $this->db->bind(':posts_tags', $data['posts_tags']);
        $this->db->bind(':post_url', $data['post_url']);
        $this->db->bind(':post_is_active', $data['post_is_active']);
        $this->db->bind(':posts_status', $data['posts_status']);
        $this->db->bind(':meta_description', $data['meta_description']);
        $this->db->bind(':meta_keyword', $data['meta_keyword']);
        $this->db->bind(':meta_title', $data['meta_title']);
        $this->db->bind(':post_id', $data['post_id']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }


    /**
     * @return array|bool
     */
    public function SelectAllPosts(){
        $this->db->query('select * from posts inner join users u on posts.user_id = u.id');

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }
    }

    /**
     * @param $post_id
     * @return array|bool
     */
    public function SelectPostsByUrl($post_url){

        $this->db->query("select * from posts where post_url= :post_url and post_is_active = 1 and posts_status = 'published'");

        $this->db->bind(":post_url", $post_url);

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }

    }

    /**
     * @param $post_id
     * @return array|bool
     */
    public function SelectPostsById($post_id){

        $this->db->query("select * from posts where post_id= :post_id and post_is_active = 1 and posts_status = 'published'");

        $this->db->bind(":post_id", $post_id);

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }

    }

    public function SelectPostCategories(){
        $this->db->query("select * from posts_category");

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }
    }



    /**
     * @param $post_id
     * @return array|bool
     */
    public function SelectPostsByCategory($category_id){

        $this->db->query("select * from posts inner join posts_category pc on posts.post_category = pc.id  where pc.id= :category_id and posts.post_is_active = 1 and posts.posts_status = 'published'");

        $this->db->bind(":category_id", $category_id);

        if($results = $this->db->resultset()){
            return $results;
        }else{
            return false;
        }

    }

}



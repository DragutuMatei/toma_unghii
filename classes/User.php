<?php
class User
{
    private $_db, $_data, $_sessionName;
    public $_isLoggedIn = false;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function addPost($fields = array())
    {
        if (!$this->_db->insert("mesaje", $fields)) {
            throw new Exception("nu a mers, dc? nush");
        }
    }

    public function deletePost($fields)
    {
        if (!$this->_db->delete("mesaje", $fields)) {
            throw new Exception("nu a mers, dc? nush");
        }
    }

    public function getPosts()
    {
        $posts = $this->_db->get("mesaje", array("id", ">", "0"), "ORDER BY id DESC");
        return $posts->results();
    }
}

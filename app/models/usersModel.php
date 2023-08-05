<?php

Class users {
    private $db;

    public function __construct() {
        $this->db = new Model;
    }

    public function getUsername($username) {
        $query = "SELECT * FROM users WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        return $this->db->single();
    }
}

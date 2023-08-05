<?php

Class usersModel {
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

    public function addProject($data) {
        $query = "INSERT INTO users 
                VALUES(null, :title, :descriptions, :goal_amount, 
                :start_date, :end_date, :status)";
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('descriptions', $data['descriptions']);
        $this->db->bind('goal_amount', $data['goal_amount']);
        $this->db->bind('start_date', date('Y-m-d H:i:s'));
        $end_date = $data['end_date'] . ' 23:59:59';
        $this->db->bind('end_date', $end_date);
        $this->db->bind('status', $data['status']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

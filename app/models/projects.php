<?php

Class projects {
    private $db;

    public function __construct() {
        $this->db = new Model;
    }

    public function showAllProjects() {
        $query = "SELECT * FROM projects";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function showProject($id) {
        $query = "SELECT p.title, p.goal_amount, SUM(f.amount) as total_donations
            FROM Projects p
            LEFT JOIN Funding f ON p.project_id = f.project_id
            WHERE p.project_id = :id
            GROUP BY p.project_id";
        $this->db->query($query);
        $this->db->bind('project_id', $id);
        return $this->db->single();
    }

    public function addProject($data) {
        $query = "INSERT INTO projects 
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

    public function updateProject($data) {
        $query = "UPDATE projects SET descriptions = :descriptions, goal_amount = :goal_amount,
        end_date = :end_date, status = :status WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('descriptions', $data['descriptions']);
        $this->db->bind('goal_amount', $data['goal_amount']);
        $end_date = $data['end_date'] . ' 23:59:59';
        $this->db->bind('end_date', $end_date);
        $this->db->bind('status', $data['status']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
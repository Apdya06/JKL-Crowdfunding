<?php

Class fundsModel {
    private $db;

    public function __construct() {
        $this->db = new Model;
    }

    public function sendDonations($data) {
        $query = "INSERT INTO funds
            VALUES(null, :project_id, :amount, donation_date)
            WHERE project_id = :project_id";
        $this->db->query($query);
        // $this->db->bind('project_id', $data['project_id']);
        // $this->db->bind('amount', $data['amount']);
        $this->db->bind('donation_date', date('Y-m-d H:i:s'));
    }
}
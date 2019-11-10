<?php

class MCases extends CI_Model {
    public function getBusinessCase() {
        $this->db->select('cases.*, field.name as fieldName');
        $this->db->from('cases');
        $this->db->join('field', 'field.id = cases.field_id');
        $this->db->where('field.name', 'Business Law');
        $query = $this->db->get();
        return $query->result();
    }

    public function getFamilyCase() {
        $this->db->select('cases.*, field.name as fieldName');
        $this->db->from('cases');
        $this->db->join('field', 'field.id = cases.field_id');
        $this->db->where('field.name', 'Family Law');
        $query = $this->db->get();
        return $query->result();
    }

    public function getFinanceCase() {
        $this->db->select('cases.*, field.name as fieldName');
        $this->db->from('cases');
        $this->db->join('field', 'field.id = cases.field_id');
        $this->db->where('field.name', 'Finance Law');
        $query = $this->db->get();
        return $query->result();
    }

    public function getEducationCase() {
        $this->db->select('cases.*, field.name as fieldName');
        $this->db->from('cases');
        $this->db->join('field', 'field.id = cases.field_id');
        $this->db->where('field.name', 'Education Law');
        $query = $this->db->get();
        return $query->result();
    }
}

?>

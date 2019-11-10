<?php

class Lawyers extends CI_Model {
    public function getThree() {
        $this->db->select('lawyer.id, lawyer.name, field.name as field, lawyer.photo');
        $this->db->from('lawyer');
        $this->db->limit(3);
        $this->db->order_by('rand()');
        $this->db->join('field', 'field.id = lawyer.field_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAll() {
        $this->db->select('lawyer.id, lawyer.name, field.name as field, lawyer.photo');
        $this->db->from('lawyer');
        $this->db->order_by('rand()');
        $this->db->join('field', 'field.id = lawyer.field_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getLawyerEducation() {
        $this->db->select('*');
        $this->db->from('lawyer');
        $this->db->order_by('rand()');
        $this->db->join('education', 'education.lawyer_id = lawyer.id');
        $query = $this->db->get();
        $result = $query->result();

        $nestedResult = array();
        $maxId = -1;
        foreach ($result as $row) {
            if (!isset($nestedResult[$row->id]) || $nestedResult[$row->id] === null)
                $nestedResult[$row->id] = array();
            array_push($nestedResult[$row->id], $row);
        }
        
        return array_values($nestedResult);
    }
}

?>
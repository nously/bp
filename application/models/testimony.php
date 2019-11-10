<?php

class Testimony extends CI_Model {
    public function getAll() {
        $query = $this->db->get('testimony');
        return $query->result();
    }
}

?>
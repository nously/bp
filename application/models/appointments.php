<?php

class Appointments extends CI_Model {
    public function post() {
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['date'] = $this->input->post('date');
        $data['message'] = $this->input->post('message');

        $this->db->insert('appointment', $data);
    }
}

?>
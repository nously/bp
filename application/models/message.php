<?php

class Message extends CI_Model {
    public function post() {
        $data['message'] = $this->input->post('message');
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['subject'] = $this->input->post('subject');
        

        $this->db->insert('message', $data);
    }
}

?>
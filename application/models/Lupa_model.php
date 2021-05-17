<?php

class Lupa_model extends CI_Model
{
    public function getlupa()
    {
        return $this->db->get('lupa')->result_array();
    }

    public function tambahDatalupa()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
        ];

        $this->db->insert('lupa', $data);
    }

    public function hapusDatalupa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lupa');
    }

    public function getlupaById($id)
    {
        return $this->db->get_where('lupa', ['id' => $id])->row_array();
    }
}

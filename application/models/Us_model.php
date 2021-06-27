<?php

class Us_model extends CI_Model
{
    public function getallus()
    {
        return $this->db->get('user')->result_array();
    }

    public function hapusDatauser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getuserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }


    public function ubahuser()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => $this->input->post('role_id', true),
            "is_active" => $this->input->post('is_active', true),
            "date_created" => $this->input->post('date_created', true),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}

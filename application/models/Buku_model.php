<?php

class Buku_model extends CI_Model
{
    public function getALlbuku()
    {
        return $this->db->get('psb')->result_array();
    }

    public function tambahDatabuku()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "jumlah" => $this->input->post('jumlah', true),
            "tanggal" => $this->input->post('tanggal', true),
            "top" => $this->input->post('top', true),
            "nisn" => $this->input->post('nisn', true),

            "rep" => $this->input->post('rep', true),
            "res" => $this->input->post('res', true),

        ];

        $this->db->insert('psb', $data);
    }

    public function hapusDatabuku($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('psb');
    }

    public function getbukuById($id)
    {
        return $this->db->get_where('psb', ['id' => $id])->row_array();
    }
    public function sum()
    {
        $sql = "SELECT sum(res) as res FROM psb";
        $result = $this->db->query($sql);
        return $result->row()->res;
    }

    public function ubahbuku()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "jumlah" => $this->input->post('jumlah', true),
            "tanggal" => $this->input->post('tanggal', true),
            "top" => $this->input->post('top', true),
            "nisn" => $this->input->post('nisn', true),

            "rep" => $this->input->post('rep', true),
            "res" => $this->input->post('res', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('psb', $data);
    }

    public function cariDatabuku()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nisn', $keyword);
        return $this->db->get('psb')->result_array();
    }
}

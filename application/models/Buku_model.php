<?php

class Buku_model extends CI_Model
{
    public function getALlbuku()
    {
        return $this->db->get('buku')->result_array();
    }

    public function tambahDatabuku()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "jumlah" => $this->input->post('jumlah', true),
            "tanggal" => $this->input->post('tanggal', true),
            "top" => $this->input->post('top', true),
            "rep" => $this->input->post('rep', true),
            "res" => $this->input->post('res', true),

        ];

        $this->db->insert('buku', $data);
    }

    public function hapusDatabuku($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('buku');
    }

    public function getbukuById($id)
    {
        return $this->db->get_where('buku', ['id' => $id])->row_array();
    }
    public function sum()
    {
        $sql = "SELECT sum(res) as res FROM buku";
        $result = $this->db->query($sql);
        return $result->row()->res;
    }

    public function ubahbuku()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "jumlah" => $this->input->post('jumlah', true),
            "tanggal" => $this->input->post('tanggal', true),
            "top" => $this->input->post('top', true),
            "rep" => $this->input->post('rep', true),
            "res" => $this->input->post('res', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('buku', $data);
    }

    public function cariDatabuku()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('top', $keyword);
        return $this->db->get('buku')->result_array();
    }
}

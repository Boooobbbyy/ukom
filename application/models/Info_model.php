<?php

class Info_model extends CI_Model
{
    public function getALlinfo()
    {
        return $this->db->get('info')->result_array();
    }

    public function tambahDatainfo()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "tanggal" => $this->input->post('tanggal', true),
            "top" => $this->input->post('top', true),
            "rep" => $this->input->post('rep', true),
            "res" => $this->input->post('res', true),

        ];

        $this->db->insert('info', $data);
    }

    public function hapusDatainfo($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('info');
    }

    public function getinfoById($id)
    {
        return $this->db->get_where('info', ['id' => $id])->row_array();
    }
    public function sum()
    {
        $sql = "SELECT sum(res) as res FROM info";
        $result = $this->db->query($sql);
        return $result->row()->res;
    }

    public function ubahinfo()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "tanggal" => $this->input->post('tanggal', true),
            "top" => $this->input->post('top', true),
            "rep" => $this->input->post('rep', true),
            "res" => $this->input->post('res', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('info', $data);
    }

    public function cariDatainfo()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('info')->result_array();
    }
}

<?php

class Siswa_Model extends CI_Model
{
    public function getALlssw()
    {
        return $this->db->get('psb')->result_array();
    }

    public function tambahDatassw()
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

    public function hapusDatassw($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('psb');
    }

    public function getsswById($id)
    {
        return $this->db->get_where('psb', ['id' => $id])->row_array();
    }
    public function sum()
    {
        $sql = "SELECT sum(res) as res FROM psb";
        $result = $this->db->query($sql);
        return $result->row()->res;
    }

    public function ubahssw()
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

    public function cariDatassw()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nisn', $keyword);
        return $this->db->get('psb')->result_array();
    }
    public function join2table()
    {
        $this->db->select('*');
        $this->db->from('psb');
        $this->db->join('user', 'user.name = psb.name');
        $query = $this->db->get();
        return $query;
    }
}

<?php

class Arsip_model extends CI_Model
{
    public function getALlArsip()
    {
        return $this->db->get('arsip')->result_array();
    }

    public function tambahDataArsip()
    {
        $data = [
            "nomorsurat" => $this->input->post('nomorsurat', true),
            "pengirim" => $this->input->post('pengirim', true),
            "tglmasuk" => $this->input->post('tglmasuk', true),
            "perihal" => $this->input->post('perihal', true),
            "tujuan" => $this->input->post('tujuan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $this->db->insert('arsip', $data);
    }

    public function hapusDataArsip($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('arsip');
    }

    public function getArsipById($id)
    {
        return $this->db->get_where('arsip', ['id' => $id])->row_array();
    }

    public function ubahDataArsip()
    {
        $data = [
            "nomorsurat" => $this->input->post('nomorsurat', true),
            "pengirim" => $this->input->post('pengirim', true),
            "tglmasuk" => $this->input->post('tglmasuk', true),
            "perihal" => $this->input->post('perihal', true),
            "tujuan" => $this->input->post('tujuan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('arsip', $data);
    }


}

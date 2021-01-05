<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Arsip_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Arsip SURAT';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['arsip'] = $this->Arsip_model->getALlArsip();

        $this->load->view('user/index', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Arsip SURAT';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nomorsurat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
        $this->form_validation->set_rules('tglmasuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/tambah', $data);
        } else {
            $this->Arsip_model->tambahDataArsip();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('user');
        }
    }

    public function hapus($id)
    {
        $this->Arsip_model->hapusDataArsip($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('user');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Arsip';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Arsip_model->getArsipById($id);
        $this->load->view('user/detail', $data);
    }

    public function ubah($id)
    {
        $data['title'] = 'ubah Arsip SURAT';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Arsip_model->getArsipById($id);

        $this->form_validation->set_rules('nomorsurat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
        $this->form_validation->set_rules('tglmasuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/ubah', $data);
        } else {
            $this->Arsip_model->ubahDataArsip();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user');
        }
    }
}


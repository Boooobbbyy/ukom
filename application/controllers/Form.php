<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Info_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['info'] = $this->Info_model->getALlinfo();
        $data['sum'] = $this->Info_model->sum();
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Info_model->tambahDatainfo();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Form');
        }

        if ($this->input->post('cari')) {
            $data['info'] = $this->Info_model->cariDatainfo();
        }
    }

    public function edit()
    {
        $data['sum'] = $this->Info_model->sum();
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['info'] = $this->Info_model->getALlinfo();
        if ($this->input->post('cari')) {
            $data['info'] = $this->Info_model->cariDatainfo();
        }

        $this->load->view('templates/head', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/foot', $data);
    }
    public function tamp()
    {
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum'] = $this->Info_model->sum();
        $data['info'] = $this->Info_model->getALlinfo();
        if ($this->input->post('cari')) {
            $data['info'] = $this->Info_model->cariDatainfo();
        }

        $this->load->view('templates/head', $data);
        $this->load->view('user/tampil', $data);
        $this->load->view('templates/foot', $data);
    }
    public function print()
    {
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['sum'] = $this->Info_model->sum();
        $data['info'] = $this->Info_model->getALlinfo();
        if ($this->input->post('cari')) {
            $data['info'] = $this->Info_model->cariDatainfo();
        }


        $this->load->view('user/print', $data);
    }

    public function tambah()
    {
        $data['info'] = $this->Info_model->getALlinfo();
        $data['title'] = 'Tambah Form ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum'] = $this->Info_model->sum();
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/tambah', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Info_model->tambahDatainfo();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Form');
        }
    }

    public function hapus($id)
    {
        $data['info'] = $this->Info_model->getALlinfo();
        $data['sum'] = $this->Info_model->sum();
        $this->Info_model->hapusDatainfo($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Form/edit');
    }

    public function detail($id)
    {
        $data['info'] = $this->Info_model->getALlinfo();
        $data['sum'] = $this->Info_model->sum();
        $data['title'] = 'Detail Form';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Info_model->getinfoById($id);
        $this->load->view('templates/head', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/foot', $data);
    }

    public function ubahx($id)
    {
        $data['info'] = $this->Info_model->getALlinfo();
        $data['sum'] = $this->Info_model->sum();
        $data['title'] = 'ubah Form ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Info_model->getinfoById($id);

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/ubah', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Info_model->ubahinfo();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Form/edit');
        }
    }
}

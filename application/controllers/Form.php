<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['buku'] = $this->Buku_model->getALlbuku();
        $data['sum'] = $this->Buku_model->sum();
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul Buku', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Buku_model->tambahDatabuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Form');
        }

        if ($this->input->post('cari')) {
            $data['buku'] = $this->Buku_model->cariDatabuku();
        }
    }

    public function edit()
    {
        $data['sum'] = $this->Buku_model->sum();
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['buku'] = $this->Buku_model->getALlbuku();
        if ($this->input->post('cari')) {
            $data['buku'] = $this->Buku_model->cariDatabuku();
        }

        $this->load->view('templates/head', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/foot', $data);
    }
    public function tamp()
    {
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum'] = $this->Buku_model->sum();
        $data['buku'] = $this->Buku_model->getALlbuku();
        if ($this->input->post('cari')) {
            $data['buku'] = $this->Buku_model->cariDatabuku();
        }

        $this->load->view('templates/head', $data);
        $this->load->view('user/tampil', $data);
        $this->load->view('templates/foot', $data);
    }
    public function print()
    {
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['sum'] = $this->Buku_model->sum();
        $data['buku'] = $this->Buku_model->getALlbuku();
        if ($this->input->post('cari')) {
            $data['buku'] = $this->Buku_model->cariDatabuku();
        }


        $this->load->view('user/print', $data);
    }

    public function tambah()
    {
        $data['buku'] = $this->Buku_model->getALlbuku();
        $data['title'] = 'Tambah Form ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum'] = $this->Buku_model->sum();
        $this->form_validation->set_rules('judul', 'Judul Buku', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/tambah', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Buku_model->tambahDatabuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Form');
        }
    }

    public function hapus($id)
    {
        $data['buku'] = $this->Buku_model->getALlbuku();
        $data['sum'] = $this->Buku_model->sum();
        $this->Buku_model->hapusDatabuku($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Form/edit');
    }

    public function detail($id)
    {
        $data['buku'] = $this->Buku_model->getALlbuku();
        $data['sum'] = $this->Buku_model->sum();
        $data['title'] = 'Detail Form';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Buku_model->getbukuById($id);
        $this->load->view('templates/head', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/foot', $data);
    }

    public function ubahx($id)
    {
        $data['buku'] = $this->Buku_model->getALlbuku();
        $data['sum'] = $this->Buku_model->sum();
        $data['title'] = 'ubah Form ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Buku_model->getbukuById($id);

        $this->form_validation->set_rules('judul', 'Judul Buku', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/ubah', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Buku_model->ubahbuku();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Form/edit');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_Model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'name  ', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('nisn', 'nisn', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');
        $this->form_validation->set_rules('rep', 'rep', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/uhead', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/ufoot', $data);
        } else {
            $this->Siswa_Model->tambahDatassw();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('User/tamp');
        }

        if ($this->input->post('cari')) {
            $data['psb'] = $this->Siswa_Model->cariDatassw();
        }
    }

    public function tamp()
    {
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['psb'] = $this->Siswa_Model->getALlssw();
        if ($this->input->post('cari')) {
            $data['psb'] = $this->Siswa_Model->cariDatassw();
        }

        $this->load->view('templates/uhead', $data);
        $this->load->view('user/tampilu', $data);
        $this->load->view('templates/ufoot', $data);
    }
    public function print($id)
    {
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Siswa_Model->getsswById($id);
        $data['sum'] = $this->Siswa_Model->sum();
        $data['psb'] = $this->Siswa_Model->getALlssw();
        if ($this->input->post('cari')) {
            $data['psb'] = $this->Siswa_Model->cariDatassw();
        }


        $this->load->view('user/print', $data);
    }

    public function detail($id)
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'Detail Form';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Siswa_Model->getsswById($id);
        $this->load->view('templates/uhead', $data);
        $this->load->view('user/detailu', $data);
        $this->load->view('templates/ufoot', $data);
    }
    public function tambah()
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['title'] = 'Tambah Form ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum'] = $this->Siswa_Model->sum();
        $this->form_validation->set_rules('name', 'name  ', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('nisn', 'nisn', 'required');
        $this->form_validation->set_rules('rep', 'rep', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/uhead', $data);
            $this->load->view('user/tambah', $data);
            $this->load->view('templates/ufoot', $data);
        } else {
            $this->Siswa_Model->tambahDatassw();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Form');
        }
    }
}

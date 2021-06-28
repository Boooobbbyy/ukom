<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_Model');
        $this->load->model('Us_model');
        $this->load->model('Lupa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'BPPD ';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'name  ', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('nisn', 'nisn', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');
        $this->form_validation->set_rules('rep', 'rep', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Siswa_Model->tambahDatassw();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Form');
        }

        if ($this->input->post('cari')) {
            $data['psb'] = $this->Siswa_Model->cariDatassw();
        }
    }

    public function edit()
    {
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['psb'] = $this->Siswa_Model->getALlssw();
        if ($this->input->post('cari')) {
            $data['psb'] = $this->Siswa_Model->cariDatassw();
        }

        $this->load->view('templates/head', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/foot', $data);
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

        $this->load->view('templates/head', $data);
        $this->load->view('user/tampil', $data);
        $this->load->view('templates/foot', $data);
    }
    public function print()
    {
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['sum'] = $this->Siswa_Model->sum();
        $data['psb'] = $this->Siswa_Model->getALlssw();
        if ($this->input->post('cari')) {
            $data['psb'] = $this->Siswa_Model->cariDatassw();
        }


        $this->load->view('user/print', $data);
    }

    public function tambah()
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['title'] = 'Tambah Form ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum'] = $this->Siswa_Model->sum();
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('nisn', 'nisn', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');
        $this->form_validation->set_rules('rep', 'rep', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/tambah', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Siswa_Model->tambahDatassw();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Form');
        }
    }

    public function hapus($id)
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['sum'] = $this->Siswa_Model->sum();
        $this->Siswa_Model->hapusDatassw($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Form/edit');
    }

    public function detail($id)
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'Detail Form';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Siswa_Model->getsswById($id);
        $this->load->view('templates/head', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/foot', $data);
    }

    public function ubahx($id)
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'ubah Form ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Siswa_Model->getsswById($id);

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('top', 'top', 'required');
        $this->form_validation->set_rules('nisn', 'nisn', 'required');
        $this->form_validation->set_rules('res', 'res', 'required');
        $this->form_validation->set_rules('rep', 'rep', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('user/ubah', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Siswa_Model->ubahssw();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Form/edit');
        }
    }

    //==========================================================
    public function editus()
    {
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->Us_model->getallus();

        $this->load->view('templates/headus', $data);
        $this->load->view('user/editus', $data);
        $this->load->view('templates/foot', $data);
    }
    public function hapusus($id)
    {
        $data['user'] = $this->Us_model->getallus();
        $data['sum'] = $this->Siswa_Model->sum();
        $this->Us_model->hapusDatauser($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Form/editus');
    }

    public function ubahus($id)
    {
        $data['user'] = $this->Us_model->getallus();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'ubah user ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userss'] = $this->Us_model->getuserById($id);

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('role_id', 'role_id', 'required');
        $this->form_validation->set_rules('is_active', 'is_active', 'required');
        $this->form_validation->set_rules('date_created', 'date_created', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headus', $data);
            $this->load->view('user/ubahus', $data);
            $this->load->view('templates/foot', $data);
        } else {
            $this->Us_model->ubahuser();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Form/editus');
        }
    }

    public function forgot()
    {


        $data['title'] = 'Registration';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/forgot');
        $this->load->view('templates/auth_footer');
    }
    public function tambhL()
    {


        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');


        $this->Lupa_model->tambahDatalupa();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Auth');
    }

    public function editL()
    {

        $data['title'] = 'BPPD ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->Lupa_model->getlupa();

        $this->load->view('templates/headus', $data);
        $this->load->view('user/Llupa', $data);
        $this->load->view('templates/foot', $data);
    }
    public function hapusL($id)
    {
        $data['lupa'] = $this->Lupa_model->getlupa();

        $this->Lupa_model->hapusDatalupa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Form/editL');
    }

    public function printd($id)
    {
        $data['psb'] = $this->Siswa_Model->getALlssw();
        $data['sum'] = $this->Siswa_Model->sum();
        $data['title'] = 'Detail Form';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Siswa_Model->getsswById($id);

        $this->load->view('user/printd', $data);
    }
}

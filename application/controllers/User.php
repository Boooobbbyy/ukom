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
        $data['count'] = $this->Siswa_Model->count();
        $data['title'] = 'BPPD ';
        $this->db->select('*');
        $this->db->from('psb');
        // $data['join'] = $this->db->select('psb.*, psb.id AS name, user.name')->join('psb', 'user.name = psb.name');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //  $query = $this->db->get();
        // return $query->result();
        $this->form_validation->set_rules('name', 'name  ', 'required|is_unique[psb.name]');
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
        $mpdf = new \Mpdf\Mpdf();
        $a = $this->Siswa_Model->getsswById($id);
        $data = $this->load->view('user/print', ['mahasiswa' => $a], TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
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
        $this->form_validation->set_rules('name', 'name  ', 'required|is_unique[psb.name]');
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
            redirect('User');
        }
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_Access_Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/crud/M_Tbl_Access_Menu','M_Access_Menu');
        $this->load->model('user/M_User');
        $this->load->helper('auth');
        $this->user=$this->M_User->getUserLoginData();
        isLoggedIn();    
    }

    public function index()
    {
        $data['judul']='Data Access Menu';
        $data['user'] = $this->user;
        $data['accessMenu'] = $this->M_Access_Menu->get_all();
        $this->load->view('layouts/_templates/header',$data);
        $this->load->view('layouts/_templates/navbar',$data);
        $this->load->view('layouts/_templates/sidebar',$data);
        $this->load->view('admin/crud/tbl_access_menu/index', $data);
        $this->load->view('layouts/_templates/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('role_id', 'Role', 'trim|required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Access Menu';
            $data['user'] = $this->user;
            $this->load->view('layouts/_templates/header',$data);
            $this->load->view('layouts/_templates/navbar',$data);
            $this->load->view('layouts/_templates/sidebar',$data);
            $this->load->view('admin/crud/tbl_access_menu/tambah',$data);
            $this->load->view('layouts/_templates/footer');
        } else {
            $data = [
                'role_id' => $this->input->post('role_id'),
                'menu_id' => $this->input->post('menu_id'),
            ];
            $this->db->insert('tbl_access_menu', $data);
            $this->session->set_flashdata('message', ' <script>alert("DATA Berhasil ditambahkan");</script>');
            redirect('admin/crud/Tbl_Access_Menu');
        }
    }
    public function hapus($id)
    {
        $this->db->delete('tbl_access_menu', ['id_access_menu' => $id]);
        $this->session->set_flashdata('message', ' <script>alert("DATA Berhasil Hapus");</script>');
        redirect('admin/crud/Tbl_Access_Menu');
    }
    public function ubah($id)
    {
        $this->form_validation->set_rules('role_id', 'Role', 'trim|required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Edit Access Menu';
            $data['user'] = $this->user;
            $this->load->view('layouts/_templates/header',$data);
            $this->load->view('layouts/_templates/navbar',$data);
            $this->load->view('layouts/_templates/sidebar',$data);
            $this->load->view('admin/crud/tbl_access_menu/edit',$data);
            $this->load->view('layouts/_templates/footer');
        } else {
            $data = [
                'role_id' => $this->input->post('role_id'),
                'menu_id' => $this->input->post('menu_id'),
            ];
            $this->db->where('id_access_menu', $id);
            $this->db->update('tbl_access_menu', $data);
            $this->session->set_flashdata('message', ' <script>alert("DATA Berhasil diRubah");</script>');
            redirect('admin/crud/Tbl_Access_Menu');
        }
    }
}

/* End of file Tbl.php */

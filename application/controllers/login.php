<?php
 
class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();     
        $this->load->model('m_login');
 
    }
 
    function index(){
        $this->load->view('v_login');
    }
 
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("index.php/admin"));
 
        }else{
            $this->session->set_flashdata('msg','<div class="w3-panel w3-pale-red w3-border">
                Warning !! Username dan Password Salah</div>');
                redirect(base_url().'index.php/login');
        }
    }
}
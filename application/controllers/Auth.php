<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('login');
	}
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username',$username);
		$cek = $this->db->get()->row();
		if($cek==NULL){
			$this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>Username Tidak Ada
		</div>');
			redirect('auth');
		}else if($password==$cek->password){
            $data = array(
                'id_user' => $cek->id_user,
                'nama' => $cek->nama,
                'username' => $cek->username,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data);
            $user_id = $this->session->userdata('id_user');
            $this->User_model->updateLastLogin($user_id);
            redirect('admin/home');
        }else{
            $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>Password Salah
		</div>');
			redirect('auth');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}

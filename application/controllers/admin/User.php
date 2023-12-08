<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
	}

	public function index()
	{
		$this->db->from('user')->order_by('nama','ASC');
		$user = $this->db->get()->result_array();
		$data =  array(
			'judul_halaman' => 'User',
			'user'			=> $user
		);

		$this->template->load('layout/template_admin','admin/user_index',$data);
	}
	public function simpan(){
		$this->db->from('user')->where('username',$this->input->post('username'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>Username Sudah Ada
		</div>');
			redirect('admin/user');
		}
		$this->User_model->simpan();
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Diinput
	</div>');
		redirect('admin/user');
	}
	public function hapus_data($id){
		$where = array(
			'id_user' => $id
		);
		$this->db->delete('user',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil DiHapus
	</div>');
		redirect('admin/user');
	}
	public function update(){
		$this->User_model->update();
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil DiUpdate
	</div>');
		redirect('admin/user');
	}
}

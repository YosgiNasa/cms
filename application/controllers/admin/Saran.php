<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
    public function __construct(){
		parent::__construct();
        if($this->session->userdata('level')=='User' || NULL){
			redirect('auth');
		}
	}


	public function index()
	{
		$data =  array(
			'judul_halaman' => 'Saran',
			'saran' => $this->db->get('saran')->result_array(),
		);
		$this->template->load('layout/template_admin','admin/saran_index',$data);
	}
    public function hapus_data($id){
		$where = array(
			'id_saran' => $id
		);
		$this->db->delete('saran',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil DiHapus
	</div>');
		redirect('admin/saran');
	}
    public function hapus_all(){
        $this->db->empty_table('saran');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil DiHapus
	</div>');
		redirect('admin/saran');
	}
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}

	public function index()
	{   
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
		$data =  array(
			'judul_halaman' => 'Konfigurasi',
            'konfig'        => $konfig
		);
		$this->template->load('layout/template_admin','admin/konfigurasi_index',$data);
	}
    public function update(){
        $where = array(
			'id_konfigurasi' => 1
		);
		$data = array(
			'judul_website' => $this->input->post('judul_website'),
			'profil_website' => $this->input->post('profil_website'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
			'tiktok' => $this->input->post('tiktok'),
			'no_wa' => $this->input->post('no_wa'),
			'x' => $this->input->post('x'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email')
		);
        $this->db->update('konfigurasi',$data,$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil DiUpdate
	</div>');
		redirect('admin/konfigurasi');
	}
}

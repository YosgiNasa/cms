<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relog extends CI_Controller {
    public function __construct(){
		parent::__construct();
        if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
	}

	public function index()
	{
		$data =  array(
			'judul_halaman' => 'Recent Login',
            'login' => $this->db->get('user')->result_array(),
		);
		$this->template->load('layout/template_admin','admin/relog_index',$data);
	}
}
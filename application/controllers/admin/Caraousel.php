<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}

	public function index()
	{
		$this->db->from('user')->order_by('id_user','ASC');;
		$user = $this->db->get()->result_array();
		$this->db->from('caraousel a')->join('user b','a.username=b.username','left')->order_by('tanggal','DESC');
		$caraousel = $this->db->get()->result_array();
		$data =  array(
			'judul_halaman' => 'Caraousel',
            'caraousel'     =>	$caraousel,
			'user'			=> 	$user
		);
		$this->template->load('layout/template_admin','admin/caraousel_index',$data);
	}
	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/caraousel/';
        $config['max_size'] = 500 * 1024;
        $config['file_name'] = $namafoto;
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>Ukuran foto terlalu besar.
		</div>');
        redirect('admin/caraousel');
        }else if(! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal' => date('Y-m-d'),
            'foto' => $namafoto,
            'username' => $this->session->userdata('username'),
        );
        $this->db->insert('caraousel',$data);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Diinput
	</div>');
		redirect('admin/caraousel');
	}
	public function hapus_data($id){
		$filename = FCPATH.'/assets/upload/caraousel/'.$id;
		if(file_exists($filename)){
			unlink("./assets/upload/caraousel/".$id);
		}
		$where = array(
			'foto' => $id
		);
		$this->db->delete('caraousel',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil DiHapus
	</div>');
		redirect('admin/caraousel');
	}
}

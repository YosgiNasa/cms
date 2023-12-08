<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');

	}

	public function index()
	{

		$this->db->from('konfigurasi');
		$confik = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a')->join('kategori b','a.id_kategori=b.id_kategori','left')->join('user c','a.username=c.username','left')->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		
		$data = array(
			'judul' => 'Beranda | nasadel',
			'config' => $confik ,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten'	=> $konten
		);
		
		$config['base_url'] = base_url('home/index');
		$config['total_rows'] = $this->Home_model->count_data();
		$config['per_page'] = 4;
		$config['uri_segment'] = 3;
		$confi['num_links'] = 3;
		
		$config['full_tag_open'] = '<nav><ul class="pagination pagination-lg m-0">';
		$config['full_tag_close'] = '</ul></nav>';
		
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
		$config['attributes'] = array('class' => 'page-link');
		
		$this->pagination->initialize($config);
		$page['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$keyword = $this->input->get('keyword');
		$data['results'] =$this->Home_model->get_data($config["per_page"],$page['page'],$keyword);
		$data['post'] = $this->Home_model->get_recent_posts();
		$data['pagination'] = $this->pagination->create_links();

        // $this->load->view('beranda', $data);
		$this->template->load('template_public','beranda',$data);
	}
	public function artikel($id){
		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a')->join('kategori b','a.id_kategori=b.id_kategori','left')->join('user c','a.username=c.username','left')->where('slug',$id);
		$konten = $this->db->get()->row();
		$data = array(
			'judul' =>  $konten->judul.' | nasadel',
			'config' => $config ,
			'kategori' => $kategori,
			'konten'	=> $konten

		);
		$data['post'] = $this->Home_model->get_recent_posts();
		$this->template->load('template_public','detail',$data);
	}
	public function kategori($id)
	{

		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a')->join('kategori b','a.id_kategori=b.id_kategori','left')->join('user c','a.username=c.username','left')->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();
		$this->db->from('kategori')->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul' => $nama_kategori.' | nasadel',
			'config' => $config ,
			'nama_kategori' => $nama_kategori,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten'	=> $konten

		);
		$data['post'] = $this->Home_model->get_recent_posts();
		$this->template->load('template_public','kategori',$data);
		// $this->load->view('kategori',$data);


	}
	public function galeri(){
		$this->db->from('konfigurasi');
		$confik = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a')->join('kategori b','a.id_kategori=b.id_kategori','left')->join('user c','a.username=c.username','left')->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$this->db->from('user')->order_by('id_user','ASC');;
		$user = $this->db->get()->result_array();
		$this->db->from('galeri a')->join('user b','a.username=b.username','left')->order_by('tanggal','DESC');
		$galeri = $this->db->get()->result_array();
		$data = array(
			'judul' => 'Galeri | Nasadel',
			'config' => $confik ,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten'	=> $konten,
            'galeri'     =>	$galeri,
			'user'			=> 	$user
		);
		$data['post'] = $this->Home_model->get_recent_posts();
		$this->template->load('template','galeri',$data);
	}
	public function contact(){
		$this->db->from('konfigurasi');
		$confik = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a')->join('kategori b','a.id_kategori=b.id_kategori','left')->join('user c','a.username=c.username','left')->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul' => 'Contact | Nasadel',
			'config' => $confik ,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten'	=> $konten
		);
		$data['post'] = $this->Home_model->get_recent_posts();
		$this->template->load('template','contact',$data);
	}
	public function tambah(){
		$data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'isi_saran' => $this->input->post('isi_saran'),
            'tanggal' => date('Y-m-d'),
        );
        $this->db->insert('saran',$data);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>TerimaKasih Atas Masukkan Anda :)
	</div>');
		redirect('home/contact');
}

	// public function cari(){
	// 	$this->db->from('konfigurasi');
	// 	$confik = $this->db->get()->row();
	// 	$this->db->from('kategori');
	// 	$kategori = $this->db->get()->result_array();
	// 	$this->db->from('caraousel');
	// 	$caraousel = $this->db->get()->result_array();
	// 	$data = array(
	// 		'judul' => 'Beranda | nasadel',
	// 		'config' => $confik ,
	// 		'kategori' => $kategori,
	// 		'caraousel' => $caraousel,
	// 	);

	// 	$this->load->view('beranda',$data);
	// }
	// public function cari(){

	// 	$this->db->from('konfigurasi');
	// 	$confik = $this->db->get()->row();
	// 	$this->db->from('kategori');
	// 	$kategori = $this->db->get()->result_array();
	// 	$this->db->from('caraousel');
	// 	$caraousel = $this->db->get()->result_array();
	// 	$this->db->from('konten a')->join('kategori b','a.id_kategori=b.id_kategori','left')->join('user c','a.username=c.username','left')->where('slug',$id);
	// 	$konten = $this->db->get()->row();
	// 	$data = array(
	// 		'judul' => 'Beranda | nasadel',
	// 		'config' => $confik ,
	// 		'kategori' => $kategori,
	// 		'caraousel' => $caraousel,
	// 		'konten'	=> $konten
	// 	);
	// 	$keyword = $this->input->get('keyword');
	// 	$data['results']= $this->Home_model->cari($keyword);
	// 	$data['post'] = $this->Home_model->get_recent_posts();
	// 	$this->template->load('template_public','beranda',$data);
	// }
	// public function recent_posts() {

	// }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
    public function __construct(){
		parent::__construct();
	}
    public function get_data($limit,$start,$keyword){
		if($keyword){
			$this->db->like('judul',$keyword);
			$this->db->or_like('keterangan',$keyword);
		}
        $this->db->from('konten a')->join('user b','a.username=b.username','left')->order_by('tanggal','DESC');
		$query = $this->db->get('',$limit,$start,$keyword)->result_array();
		return $query;

		
    }
	public function count_data(){
		return $this->db->count_all('konten');
	}
	public function cari($keyword){
		$this->db->like('judul',$keyword);
		$this->db->or_like('keterangan',$keyword);
		$data = $this->db->get('konten')->result_array(); 
		return $data;
	}
	public function get_recent_posts($limit = 5) {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get()->result_array();
        return $query;
    }

}

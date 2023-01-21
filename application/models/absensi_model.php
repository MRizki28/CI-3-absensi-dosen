<?php
class absensi_model extends CI_Model{

	public function __construct(){
		$this->table = 'tb_absensi';
		$this->id = 'id_absensi';
	}
	public function insert_detail($data){
		$this->db->insert('tb_detail_absensi', $data);
	}
	public function insert($data){
		$this->db->insert($this->table, $data);
	}


	public function select_detail($key=null){
		if($key != null){
			$this->db->where($key);
		}
		$this->db->join('tb_dosen','tb_dosen.id = tb_detail_absensi.id_dosen');
		// return $this->db->get($this->table)->result_array();
		return $this->db->get('tb_detail_absensi')->result_array();
	}
	public function select($key=null){
		if($key != null){
			$this->db->where($key);
		}
		// return $this->db->get($this->table)->result_array();
		return $this->db->get('tb_absensi')->result_array();
	}

	public function delete_detail($id_produk) {
		$this->db->where('id_detail_absensi', $id_produk);
		$this->db->delete('tb_detail_absensi');
	}

/////

	public function update($key, $data){
		$this->db->where($key);
		$this->db->update($this->table, $data);
	}

	public function delete($id_produk) {
		$this->db->where('id_absensi', $id_produk);
		$this->db->delete('tb_absensi');
	}
}

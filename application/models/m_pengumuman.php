<?php
class m_pengumuman extends CI_Model{

	function getAllPengumuman(){
		$this->db->select('*');
		$this->db->from('data_pengumuman');
		return $this->db->get();
	}

	function getDataPengumuman($ID){
		$this->db->where('ID',$ID);
		$this->db->select('*');
		$this->db->from('data_pengumuman');
		return $this->db->get();
	}

	function insertDataPengumuman($data){
		$this->db->insert('data_pengumuman', $data);
	}

	function updateDataPengumuman($ID, $data){
		$this->db->where('ID', $ID);
		$this->db->update('data_pengumuman', $data);
	}

	function deleteDataPengumuman($ID){
		$this->db->where('ID', $ID);
		$this->db->delete('data_pengumuman');
	}
}
?>
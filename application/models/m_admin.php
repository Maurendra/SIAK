<?php 
class m_admin extends CI_Model{

	function getAllAdmin(){
		$this->db->select('*');
		$this->db->from('admin');
		return $this->db->get();
	}

	function getDataAdmin($ID){
		$this->db->where('ID',$ID);
		$this->db->select('*');
		$this->db->from('admin');
		return $this->db->get();
	}

	function insertDataAdmin($data){
		$this->db->insert('admin', $data);
	}

	function updateDataAdmin($ID, $data){
		$this->db->where('ID', $ID);
		$this->db->update('admin', $data);
	}

	function deleteDataAdmin($ID){
		$this->db->where('ID', $ID);
		$this->db->delete('admin');
	}
}
?>
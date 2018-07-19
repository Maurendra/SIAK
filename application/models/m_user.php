<?php  ?>
<?php
class m_user extends CI_Model{

	function getAllUser(){
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}

	function getDataUser($NIK){
		$this->db->where('NIK',$NIK);
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}

	function insertDataUser($data){
		$this->db->insert('user', $data);
	}

	function updateDataUser($NIK, $data){
		$this->db->where('NIK', $NIK);
		$this->db->update('user', $data);
	}

	function deleteDataUser($NIK){
		$this->db->where('NIK', $NIK);
		$this->db->delete('user');
	}
}
?>
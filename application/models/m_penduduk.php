<?php  ?>
<?php 
class m_penduduk extends CI_Model{

	function getAllPenduduk(){
		$this->db->select('*');
		$this->db->from('data_penduduk');
		return $this->db->get();
	}

	function getPenduduk($NIK){
		$this->db->where('NIK',$NIK);
		$this->db->select('*');
		$this->db->from('data_penduduk');
		return $this->db->get();
	}

	function getStatusUser($NIK){
		$this->db->where('NIK',$NIK);
		$res = $this->db->query("select Status_User from data_penduduk");
		return $res->result_array();
	}

	function insertDataPenduduk($data){
		$this->db->insert('data_penduduk', $data);
	}

	function updateDataPenduduk($NIK, $data){
		$this->db->where('NIK', $NIK);
		$this->db->update('data_penduduk', $data);
	}

	function deleteDataPenduduk($NIK){
		$this->db->where('NIK', $NIK);
		$this->db->delete('data_penduduk');
	}
}
?>
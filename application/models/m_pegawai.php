<?php  ?>
<?php 
class m_pegawai extends CI_Model{
	function getAllPegawai(){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		return $this->db->get();
	}

	function getDataPegawai($NIP){
		$this->db->where('NIP',$NIP);
		$this->db->select('*');
		$this->db->from('data_pegawai');
		return $this->db->get();
	}

	function insertDataPegawai($data){
		$this->db->insert('data_pegawai', $data);
	}

	function updateDataPegawai($NIP, $data){
		$this->db->where('NIP', $NIP);
		$this->db->update('data_pegawai', $data);
	}

	function deleteDataPegawai($NIP){
		$this->db->where('NIP', $NIP);
		$this->db->delete('data_pegawai');
	}
}
?>

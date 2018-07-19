<?php  ?>
<?php 
class m_surat extends CI_Model
{
	function insertDataFixSurat($data){
		$this->db->insert('data_surat', $data);
	}

	function insertDataQuerySurat($data){
		$this->db->insert('query_surat', $data);
	}

	function updateDataFixSurat($ID, $data){
		$this->db->where('ID', $ID);
		$this->db->update('data_surat', $data);
	}

	function updateDataQuerySurat($ID, $data){
		$this->db->where('ID', $ID);
		$this->db->update('query_surat', $data);
	}

	function getAllFixSurat(){
		$this->db->select('*');
		$this->db->from('data_surat');
		return $this->db->get();
	}

	function getAllQuerySurat(){
		$this->db->select('*');
		$this->db->from('query_surat');
		return $this->db->get();
	}

	function getAllFixSuratByID($ID){
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('ID_Pengaju', $ID);
		return $this->db->get();
	}

	function getAllQuerySuratByID($ID){
		$this->db->select('*');
		$this->db->from('query_surat');
		$this->db->where('ID_Pengaju', $ID);
		return $this->db->get();
	}

	function getDataFixSurat($ID){
		$this->db->where('ID',$ID);
		$this->db->select('*');
		$this->db->from('data_surat');
		return $this->db->get();
	}

	function getDataQuerySurat($ID){
		$this->db->where('ID',$ID);
		$this->db->select('*');
		$this->db->from('query_surat');
		return $this->db->get();
	}

	function deleteDataFixSurat($ID){
		$this->db->where('ID', $ID);
		$this->db->delete('data_surat');
	}

	function deleteDataQuerySurat($ID){
		$this->db->where('ID', $ID);
		$this->db->delete('query_surat');
	}

	function deleteDataQuerySuratByID($ID, $ID_Pengaju){
		$this->db->where('ID', $ID);
		$this->db->where('ID_Pengaju', $ID_Pengaju);
		$this->db->delete('query_surat');
	}

	function deleteDataFixSuratByID($ID, $ID_Pengaju){
		$this->db->where('ID', $ID);
		$this->db->where('ID_Pengaju', $ID_Pengaju);
		$this->db->delete('query_surat');
	}

	function deleteDataFixSuratByPengaju($ID){
		$this->db->where('ID_Pengaju', $ID);
		$this->db->delete('data_surat');
	}

	function deleteDataQuerySuratByPengaju($ID){
		$this->db->where('ID_Pengaju', $ID);
		$this->db->delete('query_surat');
	}	

}
?>
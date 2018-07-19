<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
/**
*
*/
class c_admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_user');
		$this->load->model('m_penduduk');
		$this->load->model('m_surat');
		$this->load->model('m_pegawai');
		$this->load->model('m_pengumuman');
		$this->load->model('m_admin');
	}

	public function index(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['jenisKlik'] = "profil";
		$this->load->view('views_Admin/Tampilan_profilAdmin', $data);
	}

	public function showPenduduk(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPenduduk'] = $this->m_penduduk->getAllPenduduk()->result();
		$data['jenisKlik'] = "penduduk";
		$this->load->view('views_Admin/Tampilan_ManagePenduduk', $data);
	}

	public function showPegawai(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPegawai'] = $this->m_pegawai->getAllPegawai()->result();
		$data['jenisKlik'] = "pegawai";
		$this->load->view('views_Admin/Tampilan_ManagePegawai', $data);
	}

	public function showPengumuman(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPengumuman'] = $this->m_pengumuman->getAllPengumuman()->result();
		$data['jenisKlik'] = "pengumuman";
		$this->load->view('views_Admin/Tampilan_ManagePengumuman', $data);
	}

	public function showEdit(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['jenisKlik'] = "profil";
		$this->load->view('views_Admin/Tampilan_editAdmin', $data);
	}

	public function editAdmin(){
		$data = array(
			'Nama' => $this->input->post('nama'),
			'Password' => $this->input->post('password'),
			);
		$this->m_admin->updateDataAdmin($this->session->userdata('id'), $data);
		redirect(site_url('c_admin'));
	}

	public function showDraft(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataDraftSurat'] = $this->m_surat->getAllQuerySurat()->result();
		$data['jenisKlik'] = "draft";
		$this->load->view('views_Admin/Tampilan_draftPengajuanAdmin', $data);
	}

	public function showHistory(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataSurat'] = $this->m_surat->getAllFixSurat()->result();
		$data['jenisKlik'] = "history";
		$this->load->view('views_Admin/Tampilan_historyAdmin', $data);
	}

	public function showEditPegawai($NIP){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPegawai'] = $this->m_pegawai->getDataPegawai($NIP)->row();
		$data['jenis'] = "Edit";
		$data['jenisKlik'] = "pegawai";
		$this->load->view('views_Admin/Tampilan_editPegawai', $data);
	}

	public function editPegawai(){
		$data = array(
			'NIP' => $this->input->post('nipnew'),
			'Nama' => $this->input->post('nama'),
			'Jabatan' => $this->input->post('jabatan'),
			'No_Telp' => $this->input->post('no_telp')
			);
		$this->m_pegawai->updateDataPegawai($this->input->post('nip'), $data);
		redirect(site_url('c_admin/showPegawai'));
	}

	public function showAddPegawai(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['jenis'] = "Add";
		$data['jenisKlik'] = "pegawai";
		$this->load->view('views_Admin/Tampilan_editPegawai', $data);
	}

	public function addPegawai(){
		$data = array(
			'NIP' => $this->input->post('nipnew'),
			'Nama' => $this->input->post('nama'),
			'Jabatan' => $this->input->post('jabatan'),
			'No_Telp' => $this->input->post('no_telp')
			);
		$hasil = $this->cek("Pegawai", $this->input->post('nipnew'));
		if ($hasil) {
			$this->m_pegawai->insertDataPegawai($data);
			redirect(site_url('c_admin/showPegawai'));
		} else {
			echo " <script> alert('Data sudah ada, proses penambahan gagal') </script>";
			$this->showAddPegawai();		
		}
	}

	public function deletePegawai($NIP){
		$this->m_pegawai->deleteDataPegawai($NIP);
		redirect(site_url('c_admin/showPegawai'));
	}

	public function showEditPengumuman($ID){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPengumuman'] = $this->m_pengumuman->getDataPengumuman($ID)->row();
		$data['jenis'] = "Edit";
		$data['jenisKlik'] = "pengumuman";
		$this->load->view('views_Admin/Tampilan_editPengumuman', $data);
	}

	public function editPengumuman(){
		$data = array(
			'ID' => $this->input->post('idnew'),
			'Judul' => $this->input->post('judul'),
			'Content' => $this->input->post('content')
			);
		$this->m_pengumuman->updateDataPengumuman($this->input->post('id'), $data);
		redirect(site_url('c_admin/showPengumuman'));
	}

	public function showAddPengumuman(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['jenis'] = "Add";
		$data['jenisKlik'] = "pengumumanm";
		$this->load->view('views_Admin/Tampilan_editPengumuman', $data);
	}

	public function addPengumuman(){
		$data = array(
			'ID' => $this->input->post('idnew'),
			'Judul' => $this->input->post('judul'),
			'Content' => $this->input->post('content')
			);
		$hasil = $this->cek("Pengumuman", $this->input->post('idnew'));
		if ($hasil) {
			$this->m_pengumuman->insertDataPengumuman($data);
			redirect(site_url('c_admin/showPengumuman'));
		} else {
			echo " <script> alert('Data sudah ada, proses penambahan gagal') </script>";
			$this->showAddPengumuman();		
		}
	}

	public function deletePengumuman($ID){
		$this->m_pengumuman->deleteDataPengumuman($ID);
		redirect(site_url('c_admin/showPengumuman'));
	}

	public function showEditPenduduk($NIK){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPenduduk'] = $this->m_penduduk->getPenduduk($NIK)->row();
		$data['jenis'] = "Edit";
		$data['jenisKlik'] = "penduduk";
		$this->load->view('views_Admin/Tampilan_editPenduduk', $data);
	}

	public function editPenduduk(){
		$data = array(
			'Nama' => $this->input->post('nama'),
			'TTL' => $this->input->post('ttl'),
			'Jenis_Kelamin' => $this->input->post('jns_klm'),
			'Alamat' => $this->input->post('alamat'),
			'Agama' => $this->input->post('agama'),
			'Status' => $this->input->post('status'),
			'Pekerjaan' => $this->input->post('pekerjaan'),
			'Status_User' => 0,
			);
		$this->m_penduduk->updateDataPenduduk($this->input->post('niknew'), $data);
		redirect(site_url('c_admin/showPenduduk'));
	}

	public function showAddPenduduk(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['jenis'] = "Add";
		$data['jenisKlik'] = "penduduk";
		$this->load->view('views_Admin/Tampilan_editPenduduk', $data);
	}

	public function addPenduduk(){
		$data = array(
			'NIK' => $this->input->post('nik'),
			'Nama' => $this->input->post('nama'),
			'TTL' => $this->input->post('ttl'),
			'Jenis_Kelamin' => $this->input->post('jns_klm'),
			'Alamat' => $this->input->post('alamat'),
			'Agama' => $this->input->post('agama'),
			'Status' => $this->input->post('status'),
			'Pekerjaan' => $this->input->post('pekerjaan'),
			'Status_User' => 0,
			'foto_profil' => "default"
			);
		$hasil = $this->cek("Penduduk", $this->input->post('nik'));
		if ($hasil) {
			$this->m_penduduk->insertDataPenduduk($data);
			redirect(site_url('c_admin/showPenduduk'));
		} else {
			echo " <script> alert('Data sudah ada, proses penambahan gagal') </script>";
			$this->showAddPenduduk();
		}
	}

	public function cek($jenis, $data){
		if ($jenis == "Penduduk") {
			$penduduk = $this->m_penduduk->getAllPenduduk()->result();
			foreach ($penduduk as $key) {
				if ($key->NIK == $data) {
					return false;
				}
			}
			return true;
		} elseif ( $jenis == "Pegawai") {
			$pegawai = $this->m_pegawai->getAllPegawai()->result();
			foreach ($pegawai as $key) {
				if ($key->NIP == $data) {
					return false;
				}
			}
			return true;
		} elseif ( $jenis == "Pengumuman") {
			echo "a";
			$pengumuman = $this->m_pengumuman->getAllPengumuman()->result();
			foreach ($pengumuman as $key) {
				if ($key->ID == $data) {
					return false;
				}
			}
			return true;
		} elseif ( $jenis == "Surat") {
			$surat = $this->m_surat->getAllFixSurat()->result();
			foreach ($surat as $key) {
				if ($key->ID == $data) {
					return false;
				}
			}
			return true;
		}
	}

	public function deletePenduduk($NIK){
		$this->m_user->deleteDataUser($NIK);
		$this->m_surat->deleteDataFixSuratByPengaju($NIK);
		$this->m_surat->deleteDataQuerySuratByPengaju($NIK);
		$this->m_penduduk->deleteDataPenduduk($NIK);
		redirect(site_url('c_admin/showPenduduk'));
	}

	public function tolakSurat($ID){
		$data = array(
			'Status_ACC' => 3
			);
		$this->m_surat->updateDataQuerySurat($ID, $data);
		redirect(site_url('c_admin/showDraft'));
	}

	public function showEditDraft($ID){
		$data['dataDraftSurat'] = $this->m_surat->getDataQuerySurat($ID)->row();
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPenduduk'] = $this->m_penduduk->getPenduduk($data['dataDraftSurat']->ID_Pengaju)->row();
		$data['jenisKlik'] = "draft";
		$this->load->view('views_Admin/Tampilan_editDraftSurat', $data);
	}

	public function editStatus($ID){
		if ($this->input->post('status') == 2) {
			$data = array(
				'Status_ACC' => $this->input->post('status')
				);
			$this->m_surat->updateDataQuerySurat($ID, $data);
			$databaru = $this->m_surat->getDataQuerySurat($ID)->row();
			$dataBaru = array(
				'ID' => NULL,
				'Nama' => $databaru->Nama,
				'Jenis' => $databaru->Jenis,
				'Content' => $databaru->Content,
				'ID_Pengaju' => $databaru->ID_Pengaju
				);
			$this->m_surat->insertDataFixSurat($dataBaru);
			redirect(site_url('c_admin/showDraft'));
		}else{
			$data = array(
				'Status_ACC' => $this->input->post('status')
				);
			$this->m_surat->updateDataQuerySurat($ID, $data);
			redirect(site_url('c_admin/showDraft'));
		}
	}

	public function deleteFixSurat($ID){
		$this->m_surat->deleteDataFixSurat($ID);
		redirect(site_url('c_admin/showHistory'));
	}

	public function showEditSurat($ID){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataSurat'] = $this->m_surat->getDataFixSurat($ID)->row();
		$data['dataPenduduk'] = $this->m_penduduk->getAllPenduduk()->result();
		$data['jenis'] = "Edit";
		$data['jenisKlik'] = "history";
		$this->load->view('views_Admin/Tampilan_buatSurat', $data);
	}

	public function editFixSurat(){
		$data = array(
			'Nama' => $this->input->post('nama'),
			'Jenis' => $this->input->post('jenis'),
			'Content' => $this->input->post('content'),
			'ID_Pengaju' => $this->input->post('id_pengaju')
			);
		$this->m_surat->updateDataFixSurat($this->input->post('idnew'), $data);
		redirect(site_url('c_admin/showHistory'));
	}

	public function showAddFixSurat(){
		$data['dataAdmin'] = $this->m_admin->getDataAdmin($this->session->userdata('id'))->row();
		$data['dataPenduduk'] = $this->m_penduduk->getAllPenduduk()->result();
		$data['jenis'] = "Add";
		$data['jenisKlik'] = "buat";
		$this->load->view('views_Admin/Tampilan_buatSurat', $data);
	}

	public function addFixSurat(){
		$data = array(
			'ID' => $this->input->post('id'),
			'Nama' => $this->input->post('nama'),
			'Jenis' => $this->input->post('jenis'),
			'Content' => $this->input->post('content'),
			'ID_Pengaju' => $this->input->post('id_pengaju')
			);
		$hasil = $this->cek("Surat", $this->input->post('id'));
		if ($hasil) {
			$this->m_surat->insertDataFixSurat($data);
			redirect(site_url('c_admin/showHistory'));
		} else {
			echo " <script> alert('Data sudah ada, proses penambahan gagal') </script>";
			$this->showAddFixSurat();	
		}
	}
}
?>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class c_user extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_user');
		$this->load->model('m_penduduk');
		$this->load->model('m_surat');
	}
	public function index(){
		$user['dataUser'] = $this->m_penduduk->getPenduduk($this->session->userdata('id'))->row();
		$user['dataAkun'] = $this->m_user->getDataUser($this->session->userdata('id'))->row();
		$user['active'] = "about";
		$this->load->view('views_User/Tampilan_profilpengguna', $user);
	}

	public function showEdit(){
		$user['dataUser'] = $this->m_penduduk->getPenduduk($this->session->userdata('id'))->row();
		$user['dataAkun'] = $this->m_user->getDataUser($this->session->userdata('id'))->row();
		$user['active'] = "edit";
		$this->load->view('views_User/Tampilan_editPengguna', $user);
	}

	public function showDraft(){
		$user['dataUser'] = $this->m_penduduk->getPenduduk($this->session->userdata('id'))->row();
		$user['dataAkun'] = $this->m_user->getDataUser($this->session->userdata('id'))->row();
		$user['dataSuratPengguna'] = $this->m_surat->getAllQuerySuratByID($this->session->userdata('id'))->result();
		$user['active'] = "draft";
		$this->load->view('views_User/Tampilan_draftPengajuanPengguna', $user);
	}

	public function showHistory(){
		$user['dataUser'] = $this->m_penduduk->getPenduduk($this->session->userdata('id'))->row();
		$user['dataAkun'] = $this->m_user->getDataUser($this->session->userdata('id'))->row();
		$user['dataSuratPengguna'] = $this->m_surat->getAllFixSuratByID($this->session->userdata('id'))->result();
		$user['active'] = "history";
		$this->load->view('views_User/Tampilan_historyPengguna', $user);
	}

	public function showAjukan(){
		$user['dataUser'] = $this->m_penduduk->getPenduduk($this->session->userdata('id'))->row();
		$user['dataAkun'] = $this->m_user->getDataUser($this->session->userdata('id'))->row();
		$user['active'] = "ajukan";
		$this->load->view('views_User/Tampilan_ajukanSurat', $user);
	}

	public function ajukanSurat(){
		$data = array(
			'Nama' => $this->input->post('judul'),
			'Jenis' => $this->input->post('jenis'),
			'Content' => $this->input->post('content'),
			'ID_Pengaju' => $this->session->userdata('id'),
			'Status_ACC' => 0
			);
		$this->m_surat->insertDataQuerySurat($data);
		redirect(site_url('c_user/showDraft'));
	}

	public function deletePengajuan($ID){
		$this->m_surat->deleteDataQuerySuratByID($ID, $this->session->userdata('id'));
		redirect(site_url('c_user/showDraft'));
	}

	public function editUser(){
		$data = array(
			'Email' => $this->input->post('username'),
			'Password' => $this->input->post('password')
			);
		$this->m_user->updateDataUser($this->session->userdata('id'), $data);
		redirect(site_url('c_user'));
	}
}

?>

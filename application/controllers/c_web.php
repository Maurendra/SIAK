<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
class c_web extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_pengumuman');
		$this->load->model('m_user');
		$this->load->model('m_penduduk');
		$this->load->model('m_admin');
	}
	public function index(){
		$row_AllPengumuman['rowPengumuman'] = $this->m_pengumuman->getAllPengumuman()->result();
		$this->load->view('views_Web/Tampilan_awal', $row_AllPengumuman);
	}

	public function showLogin($jenis){
		$data['jenisLogin'] = $jenis;
		$this->load->view('views_Web/Tampilan_login', $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function showRegis(){
		$this->load->view('views_Web/Tampilan_registrasi');
	}

	public function showDetailPengumuman($ID){
		$data['dataPengumuman'] = $this->m_pengumuman->getDataPengumuman($ID)->row();
		$this->load->view('views_Web/Tampilan_pengumuman', $data);
	}

	public function loginUser($username, $password){
		$user = $this->m_user->getAllUser()->result();
		$ada = false;
		foreach ($user as $key) {
			if (($key->Email == $username) && ($key->Password == $password)) {
				$ada = true;
				$data_session = array(
					'nama' => $key->Email,
					'id' => $key->NIK,
					'status' => "loginUser"
					);
				$this->session->set_userdata($data_session);
			}
		}
		if ($ada) {
			redirect(site_url('c_user'));
		} else {
			redirect(base_url());
		}
	}

	public function loginAdmin($username, $password){
		$admin = $this->m_admin->getAllAdmin()->result();
		$ada = false;
		foreach ($admin as $key) {
			if (($key->Nama == $username) && ($key->Password == $password)) {
				$ada = true;
				$data_session = array(
					'nama' => $key->Nama,
					'id' => $key->ID,
					'status' => "loginAdmin"
					);
				$this->session->set_userdata($data_session);
			}
		}
		if ($ada) {
			redirect(site_url('c_admin'));
		} else {
			redirect(base_url());
		}
	}

	public function login($jenis){
		if ($jenis == "Login%20User") {
			$this->loginUser($this->input->post('username'), $this->input->post('password'));
		} else {
			$this->loginAdmin($this->input->post('username'), $this->input->post('password'));
		}
		
	}

	public function regis(){
		$row_AllPenduduk['rowPenduduk'] = $this->m_penduduk->getAllPenduduk()->result();
		$nik = $this->input->post('nik');
		$ada = false;
		$data = array(
			'NIK' => $nik,
			'Email' => $this->input->post('username'),
			'Password' => $this->input->post('password')
			);
		$dataPenduduk = array(
			'Status_User' => 1,
			);
		foreach ($row_AllPenduduk['rowPenduduk'] as $key) {
			if (($key->NIK == $nik) && ($key->Status_User == 0)) {
				$ada = true;
			}
		}

		if ($ada == true) {
			$this->m_user->insertDataUser($data);
			$this->m_penduduk->updateDataPenduduk($nik, $dataPenduduk);
			redirect(base_url());
		}
		else{
			redirect(base_url());
		}
	}
}
?>

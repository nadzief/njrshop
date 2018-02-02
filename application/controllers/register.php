<?php defined ('BASEPATH') or exit ('No direct scripts access allowed ');

Class Register extends CI_controller {

	function __construct(){
		parent:: __construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	}

	public function index(){
		$this->form_validation->set_rules('nama_lengkap','NAMA LENGKAP','required');
		$this->form_validation->set_rules('username', 'USERNAME', 'required');
		$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
		$this->form_validation->set_rules('password', 'PASSWORD', 'required');
		$this->form_validation->set_rules('password_conf', 'PASSWORD', 'required|matches[password]');
		$this->form_validation->set_rules('jenis_kelamin', 'JENIS KELAMIN', 'required');
		$this->form_validation->set_rules('alamat', 'ALAMAT', 'required');
		$this->form_validation->set_rules('kota', 'KOTA', 'required');
		$this->form_validation->set_rules('no_rek', 'NOMOR REKENING', 'required');
			if ($this->form_validation->run() == false) {
				redirect('web','refresh');
			}
			else {
				$data = array(
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('no_hp'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'status' => '0',
					'foto' => 'default.jpg',
					'alamat' => $this->input->post('alamat'),
					'kota' => $this->input->post('kota'),
					'no_rek' => $this->input->post('no_rek')
				);
				// $data['nama_lengkap'] = $this->input->post('nama_lengkap');
				// $data['username'] = $this->input->post('username');
				// $data['email'] = $this->input->post('email');
				// $data['password'] = md5($this->input->post('password'));
				// $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
				// $data['alamat'] = $this->input->post('alamat');
				// $data['kota'] = $this->input->post('kota');
				// $data['no_rek'] = $this->input->post('no_rek');
				// $data['foto'] = $this->input->post('foto');

				$this->m_account->daftar($data);
				echo "<script> alert('Pendaftaran Berhasil!!') </script>";
        		redirect('web','refresh');
			}
	}
}
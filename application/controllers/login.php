<?php  Defined('BASEPATH') or exit ('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->model('M_login');
		}

	public function index(){

	}

	public function cekLogin(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->session->set_userdata('id_anggota', $id_anggota);
		$this->session->set_userdata('username',$username);
		$this->session->set_userdata('foto',$foto);
		$this->session->set_userdata('email', $email);
		$this->M_login->getlogin($username,$password);
	}

	public function cekLogin_admin(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->session->set_userdata('username',$username);
		$this->M_login->getlogin_admin($username,$password);
	}

	public function keluar(){
		$this->session->sess_destroy();
		echo "<script>alert('Anda Berhasil Logout!');</script>";
		redirect('web');
	}

	public function keluar_admin(){
		$this->session->sess_destroy();
		echo "<script>alert('Anda Berhasil Logout!');</script>";
		redirect('admin');
	}
}
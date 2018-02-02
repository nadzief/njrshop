<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent ::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->database();
		$this->session->userdata('username');
		$this->load->library(array('form_validation'));
		$this->load->model('m_admin');
	}

	public function index(){
		$data['judul'] = "NJr Shop | Login Admin";
		$this->load->view('admin/login', $data);
	}

	public function cek_upgrade(){
		$this->load->view('v_cek');
	}

	public function dashboard(){
		$data['judul'] = "NJr Shop | Dashboard Admin";
		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_dashboard2', $data);
		$this->load->view('admin/v_footer', $data);
	}

	// Controller Data Admin Start //
	public function admin(){
 		$data['judul'] = "NJr Shop | Admin Page";
 		$this->load->model('m_admin');
 		$data['dataadmin'] = $this->m_admin->get_admin_all();

 		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_admins', $data);
		$this->load->view('admin/v_footer', $data);
 	}

	public function admin_list(){
		$this->load->model('m_admin');
		$list = $this->m_admin->get_datatables_admin();
		$data = array();
		$no = $_POST['start'];
		foreach  ($list as $admin)  {
			$no++;
			$row = array();
			$row[] = $admin->id_admin;
			$row[] = $admin->username;
			$row[] = $admin->password;
			$row[] = $admin->level;
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_admin('."'".$admin->id_admin."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_admin('."'".$admin->id_admin."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>'; 
			$data[] = $row;
		} 
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_admin->count_all_admin(),
						"recordsFiltered" => $this->m_admin->count_filtered_admin(),
						"data" => $data
						);
		echo json_encode($output);
	}

	public function admin_edit($id){
		$this->load->model('m_admin');
		$data = $this->m_admin->get_by_id_admin($id);
		echo json_encode($data);
	}

	public function admin_add(){
		$this->load->model('m_admin');
		$data = array(
				'id_admin' => $this->input->post('id_admin'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'level' => $this->input->post('level'),
		);
		$insert = $this->m_admin->save_admin($data);
		echo json_encode(array("status" => TRUE));
	}

	public function admin_update(){
		$this->load->model('m_admin');
		$data = array(
				'id_admin' => $this->input->post('id_admin'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'level' => $this->input->post('level'),
		);
		$this->m_admin->update_admin(array('id_admin' => $this->input->post('id_admin')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function admin_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_admin($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_admin(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_admin();
 		redirect('admin/admin');
 	}
	// Controller Admin End //

	// Controller Data User Start //
	public function user(){
 		$data['judul'] = "NJr Shop | User Page";
 		$this->load->model('m_admin');
 		$data['datauser'] = $this->m_admin->get_user_all();
 		
 		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_users', $data);
		$this->load->view('admin/v_footer', $data);
 	}

	public function user_list(){
		$this->load->model('m_admin');
		$list = $this->m_admin->get_datatables_user();
		$data = array();
		$no = $_POST['start'];
		foreach  ($list as $user)  {
			$no++;
			$row = array();
			$row[] = $user->id_anggota;
			$row[] = $user->nama_lengkap;
			$row[] = $user->username;
			$row[] = $user->password;
			$row[] = $user->no_hp;
			$row[] = $user->email;
			$row[] = $user->jenis_kelamin;
			$row[] = $user->alamat;
			$row[] = $user->kota;
			$row[] = $user->no_rek;
			if($user->foto)
				$row[] = '<a href="'.base_url('foto/'.$user->foto).'" target="_blank"><img src="'.base_url('foto/'.$user->foto).'" class="img-responsive" /></a>';
			else
				$row[] = '(No photo)';
				$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_user('."'".$user->id_anggota."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user('."'".$user->id_anggota."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>'; 
				$data[] = $row;
		 } 
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_admin->count_all_user(),
						"recordsFiltered" => $this->m_admin->count_filtered_user(),
						"data" => $data
		);
		echo json_encode($output);
	}

	public function user_edit($id){
		$this->load->model('m_admin');
		$data = $this->m_admin->get_by_id_user($id);
		echo json_encode($data);
	}

	public function user_add(){
		$this->load->model('m_admin');
		$data = array(
				'id_anggota' => $this->input->post('id_anggota'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'no_rek' => $this->input->post('no_rek'),
				'foto' => $this->input->post('foto')
		);
		$insert = $this->m_admin->save_user($data);
		echo json_encode(array("status" => TRUE));
	}

	public function user_update(){
		$this->load->model('m_admin');
		$data = array(
				'id_anggota' => $this->input->post('id_anggota'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'no_rek' => $this->input->post('no_rek'),
				'foto' => $this->input->post('foto')
		);
		$this->m_admin->update_user(array('id_anggota' => $this->input->post('id_anggota')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function user_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_user($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_user(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_user();
 		redirect('admin/user');
 	}
	// Controller Data User End //

	// Controller Data Produk Start //
	public function produk(){
 		$data['judul'] = "NJr Shop | Produk Page";
 		$this->load->model('m_admin');
 		$data['dataproduk'] = $this->m_admin->get_produk_all();
 		
 		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_produk', $data);
		$this->load->view('admin/v_footer', $data);
 	}

	public function produk_list(){
		$this->load->model('m_admin');
		$list = $this->m_admin->get_datatables_produk();
		$list = $this->m_admin->get();
		$data = array();
		$no = $_POST['start'];
		foreach  ($list as $produk)  {
			$no++;
			$row = array();
			$row[] = $produk->id_produk;
			$row[] = $produk->nama_produk;
			$row[] = $produk->deskripsi;
			$row[] = $produk->nama_kategori;
			$row[] = $produk->stok;
			$row[] = $produk->category;
			$row[] = $produk->harga;
			if($produk->gambar)
				$row[] = '<a href="'.base_url('Produk/'.$produk->gambar).'" target="_blank"><img src="'.base_url('Produk/'.$produk->gambar).'" class="img-responsive" /></a>';
			else
				$row[] = '(No photo)';
				$row[] = $produk->bahan;
				$row[] = $produk->berat;
				$row[] = $produk->warna;
				$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_produk('."'".$produk->id_produk."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_produk('."'".$produk->id_produk."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>'; 
		
				$data[] = $row;
		} 
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_admin->count_all_produk(),
						"recordsFiltered" => $this->m_admin->count_filtered_produk(),
						"data" => $data
							);
		echo json_encode($output);
	}

	public function produk_edit($id){
		$this->load->model('m_admin');
		$data = $this->m_admin->get_by_id_produk($id);
		echo json_encode($data);
	}

	public function produk_add(){
		$this->load->model('m_admin');
		$data = array(
				'id_produk' => $this->input->post('id_produk'),
				'nama_produk' => $this->input->post('nama_produk'),
				'deskripsi' => $this->input->post('deskripsi'),
				'nama_kategori' => $this->input->post('nama_kategori'),
				'stok' => $this->input->post('stok'),
				'id_category' => $this->input->post('id_category'),
				'harga' => $this->input->post('harga'),
				'gambar' => $this->input->post('gambar'),
				'bahan' => $this->input->post('bahan'),
				'berat' => $this->input->post('berat'),
				'warna' => $this->input->post('warna')
		);
		$insert = $this->m_admin->save_produk($data);
		echo json_encode(array("status" => TRUE));
	}

	public function produk_update(){
		$this->load->model('m_admin');
		$data = array(
				'id_produk' => $this->input->post('id_produk'),
				'nama_produk' => $this->input->post('nama_produk'),
				'deskripsi' => $this->input->post('deskripsi'),
				'nama_kategori' => $this->input->post('nama_kategori'),
				'stok' => $this->input->post('stok'),
				'id_category' => $this->input->post('id_category'),
				'harga' => $this->input->post('harga'),
				'gambar' => $this->input->post('gambar'),
				'bahan' => $this->input->post('bahan'),
				'berat' => $this->input->post('berat'),
				'warna' => $this->input->post('warna')
		);
		$this->m_admin->update_produk(array('id_produk' => $this->input->post('id_produk')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function produk_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_produk($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_produk(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_produk();
 		redirect('admin/produk');
 	}
	// Controller Data Produk End //

	// Controller Data Kategori Produk Start //
	public function kategori_produk(){
		$this->load->model('m_admin');
		$data['judul'] = "NJr Shop | Kategori Produk Page";
		$data['datakategoriproduk'] = $this->m_admin->get_kategori_produk_all();

		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_kategori_produk', $data);
		$this->load->view('admin/v_footer', $data);
	}

	public function kategori_produk_list(){
		$this->load->model('m_admin');
		$list = $this->m_admin->get_datatables_kategori_produk();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $kategori_produk) {
			$no++;
			$row = array();
			$row[] = $kategori_produk->id;
			$row[] = $kategori_produk->category;
			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_kategori_produk('."'".$kategori_produk->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_kategori_produk('."'".$kategori_produk->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';

			$data[] = $row;
		}
		$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->m_admin->count_all_kategori_produk(),
							"recordsTotal" => $this->m_admin->count_filtered_kategori_produk(),
							"data" => $data
		);
		echo json_encode($output);
	}

	public function kategori_produk_edit($id){
		$this->load->model('m_admin');
		$data = $this->m_admin->get_by_id_kategori_produk($id);
		echo json_encode($data);
	}

	public function kategori_produk_add(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'category' => $this->input->post('category'),
		);
		$insert = $this->m_admin->save_kategori_produk($data);
		echo json_encode(array("status" => TRUE));
	}

	public function kategori_produk_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'category' => $this->input->post('category')
		);
		$this->m_admin->update_kategori_produk(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function kategori_produk_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_kategori_produk($id);
		echo json_encode(array("status" => TRUE));
	}

	public function simpan_kategori_produk(){
		$this->input->post('submit');
		$this->load->model('m_admin');
		$this->m_admin->simpan_kategori_produk();
		redirect('admin/kategori_produk');
	}
	// Controller Data Kategori Produk End //

	// Controller Data Testimoni Start //
	public function testimoni(){
 		$data['judul'] = "NJr Shop | Testimoni Page";
 		$this->load->model('m_admin');
 		$data['dataproduk'] = $this->m_admin->get_testimoni_all();
 		
 		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_testimoni', $data);
		$this->load->view('admin/v_footer', $data);
 	}

	public function testimoni_list(){
		$this->load->model('m_admin');
		$list = $this->m_admin->get_datatables_testimoni();
		$data = array();
		$no = $_POST['start'];
		foreach  ($list as $testimoni)  {
			$no++;
			$row = array();
			$row[] = $testimoni->id;
			$row[] = $testimoni->nama;
			$row[] = $testimoni->alamat;
			$row[] = $testimoni->pesan;
			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_testimoni('."'".$testimoni->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_testimoni('."'".$testimoni->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
			
			$data[] = $row;
		} 
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_admin->count_all_testimoni(),
						"recordsFiltered" => $this->m_admin->count_filtered_testimoni(),
						"data" => $data
							);
		echo json_encode($output);
	}

	public function testimoni_edit($id){
		$this->load->model('m_admin');
		$data = $this->m_admin->get_by_id_testimoni($id);
		echo json_encode($data);
	}

	public function testimoni_add(){
		$this->load->model('m_admin');
		$data = array(
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'pesan' => $this->input->post('pesan')
		);
		$insert = $this->m_admin->save_testimoni($data);
		echo json_encode(array("status" => TRUE));
	}

	public function testimoni_update(){
		$this->load->model('m_admin');
		$data = array(
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'pesan' => $this->input->post('pesan')
		);
		$this->m_admin->update_testimoni(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function testimoni_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_testimoni($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_testimoni(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_testimoni();
 		redirect('admin/testimoni');
 	}
	// Controller Data Testimoni End //

	// Controller Data About Us Start //
	public function aboutus(){
 		$data['judul'] = "NJr Shop | About Us Page";
 		$this->load->model('m_admin');
 		$data['dataaboutus'] = $this->m_admin->get_aboutus_all();
 		
 		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_aboutus', $data);
		$this->load->view('admin/v_footer', $data);
 	}

	public function aboutus_list(){
		$this->load->model('m_admin');
		$list = $this->m_admin->get_datatables_aboutus();
		$data = array();
		$no = $_POST['start'];
		foreach  ($list as $aboutus)  {
			$no++;
			$row = array();
			$row[] = $aboutus->id;
			$row[] = $aboutus->judul;
			$row[] = $aboutus->isi;
			$row[] = $aboutus->visi;
			$row[] = $aboutus->misi;
			$row[] = $aboutus->misi2;
			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_aboutus('."'".$aboutus->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_aboutus('."'".$aboutus->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
			
			$data[] = $row;
		} 
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_admin->count_all_aboutus(),
						"recordsFiltered" => $this->m_admin->count_filtered_aboutus(),
						"data" => $data
							);
		echo json_encode($output);
	}

	public function aboutus_edit($id){
		$this->load->model('m_admin');
		$data = $this->m_admin->get_by_id_aboutus($id);
		echo json_encode($data);
	}

	public function aboutus_add(){
		$this->load->model('m_admin');
		$data = array(
				'id' => $this->input->post('id'),
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'visi' => $this->input->post('visi'),
				'misi' => $this->input->post('misi'),
				'misi2' => $this->input->post('misi2')
		);
		$insert = $this->m_admin->save_aboutus($data);
		echo json_encode(array("status" => TRUE));
	}

	public function aboutus_update(){
		$this->load->model('m_admin');
		$data = array(
				'id' => $this->input->post('id'),
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'visi' => $this->input->post('visi'),
				'misi' => $this->input->post('misi'),
				'misi2' => $this->input->post('misi2')
		);
		$this->m_admin->update_aboutus(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function aboutus_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_aboutus($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_aboutus(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_aboutus();
 		redirect('admin/aboutus');
 	}
	// Controller Data About Us End //

	// Controller Data Contact Us Start //
 	public function contactus(){
 		$data['judul'] = "NJr Shop | Contact Us Page";
 		$this->load->model('m_admin');
 		$data['datacontactus'] = $this->m_admin->get_contactus_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_contactus', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function contactus_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_contactus();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $contactus) {
 			$no++;
 			$row = array();
 			$row[] = $contactus->id;
 			$row[] = $contactus->judul;
 			$row[] = $contactus->telp;
 			$row[] = $contactus->telp2;
 			$row[] = $contactus->situs;
 			$row[] = $contactus->email;
 			$row[] = $contactus->alamat;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_contactus('."'".$contactus->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_contactus('."'".$contactus->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';

 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_contactus(),
 						"recordsFiltered" => $this->m_admin->count_flitered_contactus(),
 						"data" => $data
 						);
 		echo json_encode($output);
 	}

 	public function contactus_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_contactus($id);
 		echo json_encode($data);
 	}

 	public function contactus_add(){
 		$this->load->model('m_admin');
 		$data = array(
 				'id' => $this->input->post('id'),
				'judul' => $this->input->post('judul'),
				'telp' => $this->input->post('telp'),
				'telp2' => $this->input->post('telp2'),
				'situs' => $this->input->post('situs'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat')
 		);
 		$insert = $this->m_admin->save_contactus($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function contactus_update(){
		$this->load->model('m_admin');
		$data = array(
				'id' => $this->input->post('id'),
				'judul' => $this->input->post('judul'),
				'telp' => $this->input->post('telp'),
				'telp2' => $this->input->post('telp2'),
				'situs' => $this->input->post('situs'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat')
		);
		$this->m_admin->update_contactus(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function contactus_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_contactus($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_contactus(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_contactus();
 		redirect('admin/contactus');
 	}
	// Controller Data Contact Us End //

	// Controller Data How To Buy Start //
 	public function howtobuy(){
 		$data['judul'] = "NJr Shop | How To Buy Page";
 		$this->load->model('m_admin');
 		$data['datahowtobuy'] = $this->m_admin->get_howtobuy_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_how_to_buy', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function howtobuy_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_howtobuy();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $howtobuy) {
 			$no++;
 			$row = array();
 			$row[] = $howtobuy->id;
 			$row[] = $howtobuy->judul;
 			$row[] = $howtobuy->q1;
 			$row[] = $howtobuy->a1;
 			$row[] = $howtobuy->q2;
 			$row[] = $howtobuy->a2;
 			$row[] = $howtobuy->q3;
 			$row[] = $howtobuy->a3;
 			$row[] = $howtobuy->q4;
 			$row[] = $howtobuy->a4;
 			$row[] = $howtobuy->q5;
 			$row[] = $howtobuy->a5;
 			$row[] = $howtobuy->q6;
 			$row[] = $howtobuy->a6;
 			$row[] = $howtobuy->q7;
 			$row[] = $howtobuy->a7;
 			$row[] = $howtobuy->q8;
 			$row[] = $howtobuy->a8;
 			$row[] = $howtobuy->q9;
 			$row[] = $howtobuy->a9;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_howtobuy('."'".$howtobuy->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_howtobuy('."'".$howtobuy->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';

 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_howtobuy(),
 						"recordsFiltered" => $this->m_admin->count_flitered_howtobuy(),
 						"data" => $data
 						);
 		echo json_encode($output);
 	}

 	public function howtobuy_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_howtobuy($id);
 		echo json_encode($data);
 	}

 	public function howtobuy_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
  			'judul' => $this->input->post('judul'),
  			'q1' => $this->input->post('q1'),
  			'a1' => $this->input->post('a1'),
  			'q2' => $this->input->post('q2'),
  			'a2' => $this->input->post('a2'),
  			'q3' => $this->input->post('q3'),
  			'a3' => $this->input->post('a3'),
  			'q4' => $this->input->post('q4'),
  			'a4' => $this->input->post('a4'),
  			'q5' => $this->input->post('q5'),
  			'a5' => $this->input->post('a5'),
  			'q6' => $this->input->post('q6'),
  			'a6' => $this->input->post('a6'),
  			'q7' => $this->input->post('q7'),
  			'a7' => $this->input->post('a7'),
  			'q8' => $this->input->post('q8'),
  			'a8' => $this->input->post('a8'),
  			'q9' => $this->input->post('q9'),
  			'a9' => $this->input->post('a9')
 		);
 		$insert = $this->m_admin->save_howtobuy($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function howtobuy_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
  			'judul' => $this->input->post('judul'),
  			'q1' => $this->input->post('q1'),
  			'a1' => $this->input->post('a1'),
  			'q2' => $this->input->post('q2'),
  			'a2' => $this->input->post('a2'),
  			'q3' => $this->input->post('q3'),
  			'a3' => $this->input->post('a3'),
  			'q4' => $this->input->post('q4'),
  			'a4' => $this->input->post('a4'),
  			'q5' => $this->input->post('q5'),
  			'a5' => $this->input->post('a5'),
  			'q6' => $this->input->post('q6'),
  			'a6' => $this->input->post('a6'),
  			'q7' => $this->input->post('q7'),
  			'a7' => $this->input->post('a7'),
  			'q8' => $this->input->post('q8'),
  			'a8' => $this->input->post('a8'),
  			'q9' => $this->input->post('q9'),
  			'a9' => $this->input->post('a9')
		);
		$this->m_admin->update_howtobuy(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function howtobuy_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_howtobuy($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_howtobuy(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_howtobuy();
 		redirect('admin/howtobuy');
 	}
	// Controller Data How To Buy End //

	// Controller Data How To Pay Start //
 	public function howtopay(){
 		$data['judul'] = "NJr Shop | How To Pay Page";
 		$this->load->model('m_admin');
 		$data['datahowtopay'] = $this->m_admin->get_howtopay_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_how_to_pay', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function howtopay_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_howtopay();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $howtopay) {
 			$no++;
 			$row = array();
 			$row[] = $howtopay->id;
 			$row[] = $howtopay->judul1;
 			$row[] = $howtopay->isi1;
 			$row[] = $howtopay->judul2;
 			$row[] = $howtopay->isi2;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_howtopay('."'".$howtopay->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_howtopay('."'".$howtopay->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_howtopay(),
 						"recordsFiltered" => $this->m_admin->count_flitered_howtopay(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function howtopay_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_howtopay($id);
 		echo json_encode($data);
 	}

 	public function howtopay_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
  			'judul1' => $this->input->post('judul1'),
  			'isi1' => $this->input->post('isi1'),
  			'judul2' => $this->input->post('judul2'),
  			'isi2' => $this->input->post('isi2')
 		);
 		$insert = $this->m_admin->save_howtopay($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function howtopay_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
  			'judul1' => $this->input->post('judul1'),
  			'isi1' => $this->input->post('isi1'),
  			'judul2' => $this->input->post('judul2'),
  			'isi2' => $this->input->post('isi2')
		);
		$this->m_admin->update_howtopay(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function howtopay_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_howtopay($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_howtopay(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_howtopay();
 		redirect('admin/howtopay');
 	}
	// Controller Data How To Pay End //

	// Controller Data No. Rek Start //
 	public function no_rek(){
 		$data['judul'] = "NJr Shop | Info No. Rek";
 		$this->load->model('m_admin');
 		$data['datanorek'] = $this->m_admin->get_no_rek_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_no_rek', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function no_rek_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_no_rek();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $no_rek) {
 			$no++;
 			$row = array();
 			$row[] = $no_rek->id;
 			$row[] = $no_rek->bank1;
 			$row[] = $no_rek->no_rek1;
 			$row[] = $no_rek->an1;
 			$row[] = $no_rek->bank2;
 			$row[] = $no_rek->no_rek2;
 			$row[] = $no_rek->an2;
 			$row[] = $no_rek->bank3;
 			$row[] = $no_rek->no_rek3;
 			$row[] = $no_rek->an3;
 			$row[] = $no_rek->bank4;
 			$row[] = $no_rek->no_rek4;
 			$row[] = $no_rek->an4;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_no_rek('."'".$no_rek->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_no_rek('."'".$no_rek->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_no_rek(),
 						"recordsFiltered" => $this->m_admin->count_flitered_no_rek(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function no_rek_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_no_rek($id);
 		echo json_encode($data);
 	}

 	public function no_rek_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
			'bank1' => $this->input->post('bank1'),
			'no_rek1' => $this->input->post('no_rek1'),
			'an1' => $this->input->post('an1'),
			'bank2' => $this->input->post('bank2'),
			'no_rek2' => $this->input->post('no_rek2'),
			'an2' => $this->input->post('an2'),
			'bank3' => $this->input->post('bank3'),
			'no_rek3' => $this->input->post('no_rek3'),
			'an3' => $this->input->post('an3'),
			'bank4' => $this->input->post('bank4'),
			'no_rek4' => $this->input->post('no_rek4'),
			'an4' => $this->input->post('an4')
 		);
 		$insert = $this->m_admin->save_no_rek($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function no_rek_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'bank1' => $this->input->post('bank1'),
			'no_rek1' => $this->input->post('no_rek1'),
			'an1' => $this->input->post('an1'),
			'bank2' => $this->input->post('bank2'),
			'no_rek2' => $this->input->post('no_rek2'),
			'an2' => $this->input->post('an2'),
			'bank3' => $this->input->post('bank3'),
			'no_rek3' => $this->input->post('no_rek3'),
			'an3' => $this->input->post('an3'),
			'bank4' => $this->input->post('bank4'),
			'no_rek4' => $this->input->post('no_rek4'),
			'an4' => $this->input->post('an4')
		);
		$this->m_admin->update_no_rek(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function no_rek_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_no_rek($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_no_rek(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_no_rek();
 		redirect('admin/no_rek');
 	}
	// Controller Data No. Rek End //

	// Controller Data Ongkir Start //
 	public function ongkir(){
 		$data['judul'] = "NJr Shop | Info Ongkir";
 		$this->load->model('m_admin');
 		$data['dataongkir'] = $this->m_admin->get_ongkir_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_ongkir', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function ongkir_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_ongkir();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $ongkir) {
 			$no++;
 			$row = array();
 			$row[] = $ongkir->id;
 			$row[] = $ongkir->jasa_pengiriman;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_ongkir('."'".$ongkir->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_ongkir('."'".$ongkir->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_ongkir(),
 						"recordsFiltered" => $this->m_admin->count_flitered_ongkir(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function ongkir_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_ongkir($id);
 		echo json_encode($data);
 	}

 	public function ongkir_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
			'jasa_pengiriman' => $this->input->post('jasa_pengiriman')
 		);
 		$insert = $this->m_admin->save_ongkir($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function ongkir_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'jasa_pengiriman' => $this->input->post('jasa_pengiriman')
		);
		$this->m_admin->update_ongkir(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ongkir_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_ongkir($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_ongkir(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_ongkir();
 		redirect('admin/ongkir');
 	}
	// Controller Data Ongkir End //

	// Controller Data Wilayah Desa Start //
 	public function wilayah_desa(){
 		$data['judul'] = "NJr Shop | Wilayah Desa";
 		$this->load->model('m_admin');
 		$data['datawilayahdesa'] = $this->m_admin->get_wilayah_desa_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_wilayah_desa', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function wilayah_desa_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_wilayah_desa();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $wilayah_desa) {
 			$no++;
 			$row = array();
 			$row[] = $wilayah_desa->id;
 			$row[] = $wilayah_desa->kecamatan_id;
 			$row[] = $wilayah_desa->nama;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_wilayah_desa('."'".$wilayah_desa->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_wilayah_desa('."'".$wilayah_desa->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_wilayah_desa(),
 						"recordsFiltered" => $this->m_admin->count_flitered_wilayah_desa(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function wilayah_desa_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_wilayah_desa($id);
 		echo json_encode($data);
 	}

 	public function wilayah_desa_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
			'kecamatan_id' => $this->input->post('kecamatan_id'),
			'nama' => $this->input->post('nama')
 		);
 		$insert = $this->m_admin->save_wilayah_desa($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function wilayah_desa_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'kecamatan_id' => $this->input->post('kecamatan_id'),
			'nama' => $this->input->post('nama')
		);
		$this->m_admin->update_wilayah_desa(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function wilayah_desa_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_wilayah_desa($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_wilayah_desa(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_wilayah_desa();
 		redirect('admin/wilayah_desa');
 	}
	// Controller Data Wilayah Desa End //

	// Controller Data Wilayah Kabupaten Start //
 	public function wilayah_kabupaten(){
 		$data['judul'] = "NJr Shop | Wilayah Kabupaten";
 		$this->load->model('m_admin');
 		$data['datawilayahkabupaten'] = $this->m_admin->get_wilayah_kabupaten_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_wilayah_kabupaten', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function wilayah_kabupaten_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_wilayah_kabupaten();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $wilayah_kabupaten) {
 			$no++;
 			$row = array();
 			$row[] = $wilayah_kabupaten->id;
 			$row[] = $wilayah_kabupaten->provinsi_id;
 			$row[] = $wilayah_kabupaten->nama;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_wilayah_kabupaten('."'".$wilayah_kabupaten->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_wilayah_kabupaten('."'".$wilayah_kabupaten->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_wilayah_kabupaten(),
 						"recordsFiltered" => $this->m_admin->count_flitered_wilayah_kabupaten(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function wilayah_kabupaten_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_wilayah_kabupaten($id);
 		echo json_encode($data);
 	}

 	public function wilayah_kabupaten_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
			'provinsi_id' => $this->input->post('provinsi_id'),
			'nama' => $this->input->post('nama')
 		);
 		$insert = $this->m_admin->save_wilayah_kabupaten($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function wilayah_kabupaten_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'provinsi_id' => $this->input->post('provinsi_id'),
			'nama' => $this->input->post('nama')
		);
		$this->m_admin->update_wilayah_kabupaten(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function wilayah_kabupaten_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_wilayah_kabupaten($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_wilayah_kabupaten(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_wilayah_kabupaten();
 		redirect('admin/wilayah_kabupaten');
 	}
	// Controller Data Wilayah Kabupaten End //

	// Controller Data Wilayah Kecamatan Start //
 	public function wilayah_kecamatan(){
 		$data['judul'] = "NJr Shop | Wilayah Kecamatan";
 		$this->load->model('m_admin');
 		$data['datawilayahkecamatan'] = $this->m_admin->get_wilayah_kecamatan_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_wilayah_kecamatan', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function wilayah_kecamatan_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_wilayah_kecamatan();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $wilayah_kecamatan) {
 			$no++;
 			$row = array();
 			$row[] = $wilayah_kecamatan->id;
 			$row[] = $wilayah_kecamatan->kabupaten_id;
 			$row[] = $wilayah_kecamatan->nama;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_wilayah_kecamatan('."'".$wilayah_kecamatan->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_wilayah_kecamatan('."'".$wilayah_kecamatan->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_wilayah_kecamatan(),
 						"recordsFiltered" => $this->m_admin->count_flitered_wilayah_kecamatan(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function wilayah_kecamatan_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_wilayah_kecamatan($id);
 		echo json_encode($data);
 	}

 	public function wilayah_kecamatan_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
			'kabupaten_id' => $this->input->post('kabupaten_id'),
			'nama' => $this->input->post('nama')
 		);
 		$insert = $this->m_admin->save_wilayah_kecamatan($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function wilayah_kecamatan_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'kabupaten_id' => $this->input->post('kabupaten_id'),
			'nama' => $this->input->post('nama')
		);
		$this->m_admin->update_wilayah_kecamatan(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function wilayah_kecamatan_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_wilayah_kecamatan($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_wilayah_kecamatan(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_wilayah_kecamatan();
 		redirect('admin/wilayah_kecamatan');
 	}
	// Controller Data Wilayah Kecamatan End //

	// Controller Data Wilayah Provinsi Start //
 	public function wilayah_provinsi(){
 		$data['judul'] = "NJr Shop | Wilayah Provinsi";
 		$this->load->model('m_admin');
 		$data['datawilayahprovinsi'] = $this->m_admin->get_wilayah_provinsi_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_wilayah_provinsi', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function wilayah_provinsi_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_wilayah_provinsi();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $wilayah_provinsi) {
 			$no++;
 			$row = array();
 			$row[] = $wilayah_provinsi->id;
 			$row[] = $wilayah_provinsi->nama;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_wilayah_provinsi('."'".$wilayah_provinsi->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_wilayah_provinsi('."'".$wilayah_provinsi->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_wilayah_provinsi(),
 						"recordsFiltered" => $this->m_admin->count_flitered_wilayah_provinsi(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function wilayah_provinsi_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_wilayah_provinsi($id);
 		echo json_encode($data);
 	}

 	public function wilayah_provinsi_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama')
 		);
 		$insert = $this->m_admin->save_wilayah_provinsi($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function wilayah_provinsi_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama')
		);
		$this->m_admin->update_wilayah_provinsi(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function wilayah_provinsi_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_wilayah_provinsi($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_wilayah_provinsi(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_wilayah_provinsi();
 		redirect('admin/wilayah_provinsi');
 	}
	// Controller Data Wilayah Provinsi End //

 	// Controller Data Laporan Pembelian Start //
 	public function laporan_pembelian(){
 		$data['judul'] = "NJr Shop | Laporan Pembelian";
 		$this->load->model('m_admin');
 		$data['datalaporanpembelian'] = $this->m_admin->get_laporan_pembelian_all();

 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_laporan_pembelian', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function laporan_pembelian_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_laporan_pembelian();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $laporan_pembelian) {
 			$no++;
 			$row = array();
 			$row[] = $laporan_pembelian->id;
 			$row[] = $laporan_pembelian->nama;
 			$row[] = $laporan_pembelian->no_hp;
 			$row[] = $laporan_pembelian->email;
 			$row[] = $laporan_pembelian->alamat;
 			$row[] = $laporan_pembelian->kabupaten;
 			$row[] = $laporan_pembelian->jasa_pengiriman;
 			$row[] = $laporan_pembelian->desa;
 			$row[] = $laporan_pembelian->provinsi;
 			$row[] = $laporan_pembelian->kode_pos;
 			$row[] = $laporan_pembelian->kecamatan;
 			$row[] = $laporan_pembelian->tgl;
 			$row[] = $laporan_pembelian->jam;
 			$row[] = $laporan_pembelian->status;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_laporan_pembelian('."'".$laporan_pembelian->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a>
 			<a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_laporan_pembelian('."'".$laporan_pembelian->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 						"draw" => $_POST['draw'],
 						"recordsTotal" => $this->m_admin->count_all_laporan_pembelian(),
 						"recordsFiltered" => $this->m_admin->count_flitered_laporan_pembelian(),
 						"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function laporan_pembelian_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_laporan_pembelian($id);
 		echo json_encode($data);
 	}

 	public function laporan_pembelian_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'kabupaten' => $this->input->post('kabupaten'),
			'jasa_pengiriman' => $this->input->post('jasa_pengiriman'),
			'desa' => $this->input->post('desa'),
			'provinsi' => $this->input->post('provinsi'),
			'kode_pos' => $this->input->post('kode_pos'),
			'kecamatan' => $this->input->post('kecamatan'),
			'tgl' => $this->input->post('tgl'),
			'jam' => $this->input->post('jam'),
			'status' => $this->input->post('status'),
 		);
 		$insert = $this->m_admin->save_laporan_pembelian($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function laporan_pembelian_update(){
		$this->load->model('m_admin');
		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'kabupaten' => $this->input->post('kabupaten'),
			'jasa_pengiriman' => $this->input->post('jasa_pengiriman'),
			'desa' => $this->input->post('desa'),
			'provinsi' => $this->input->post('provinsi'),
			'kode_pos' => $this->input->post('kode_pos'),
			'kecamatan' => $this->input->post('kecamatan'),
			'tgl' => $this->input->post('tgl'),
			'jam' => $this->input->post('jam'),
			'status' => $this->input->post('status'),
		);
		$this->m_admin->update_laporan_pembelian(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function laporan_pembelian_delete($id){
		$this->load->model('m_admin');
		$this->m_admin->delete_by_id_laporan_pembelian($id);
		echo json_encode(array("status" => TRUE));
	} 	

	public function simpan_laporan_pembelian(){
 		$this->input->post('submit');
 		$this->load->model('m_admin');
 		$this->m_admin->simpan_laporan_pembelian();
 		redirect('admin/laporan_pembelian');
 	}
	// Controller Data Laporan Pembelian End //

	// Controller Data Order Produk Start //
 	public function order_product(){
		$data['judul'] = "NJr Shop | Laporan Order Produk";
		$this->load->model('m_admin');
		$data['dataorderproduk'] = $this->m_admin->get_order_product_all();
		$this->load->view('admin/v_headers', $data);
		$this->load->view('admin/v_order_product', $data);
		$this->load->view('admin/v_footer', $data);
	}

 	public function order_product_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_order_product();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $order_product){
 			$no++;
 			$row = array();
 			$row[] = $order_product->id;
 			$row[] = $order_product->id_product;
 			$row[] = $order_product->id_pemesan;
 			$row[] = $order_product->nama;
 			$row[] = $order_product->email;
 			$row[] = $order_product->alamat;
 			$row[] = $order_product->phone;
 			$row[] = $order_product->status;
 			$row[] = $order_product->jumlah;
 			$row[] = $order_product->tanggal;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_order_product('."'".$order_product->id."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a> <a href="javascript:void(0)" class="btn btn-danger" title="hapus" onclick="delete_order_product('."'".$order_product->id."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 			"draw" => $_POST['draw'],
 			"recordsTotal" => $this->m_admin->count_all_order_product(),
 			"recordsFiltered" => $this->m_admin->count_flitered_order_product(),
 			"data" => $data
 		);
 		echo json_encode($output);
 	}

	public function order_product_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_order_product($id);
 		echo json_encode($data);
 	}

	public function order_product_add(){
 		$this->load->model('m_admin');
 		$data = array(
 				'id' => $this->input->post('id'),
 				'id_product' => $this->input->post('id_product'),
 				'id_pemesan' => $this->input->post('id_pemesan'),
 				'nama' => $this->input->post('nama'),
 				'email' => $this->input->post('email'),
 				'alamat' => $this->input->post('alamat'),
 				'phone' => $this->input->post('phone'),
 				'status' => $this->input->post('status'),
 				'jumlah' => $this->input->post('jumlah'),
 				'tanggal' => $this->input->post('tanggal')
 		);
 		$insert = $this->m_admin->save_order_product($data);
 		echo json_encode(array("status" => TRUE));
 	}

	public function order_product_update(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id' => $this->input->post('id'),
 			'id_product' => $this->input->post('id_product'),
 			'id_pemesan' => $this->input->post('id_pemesan'),
 			'nama' => $this->input->post('nama'),
 			'email' => $this->input->post('email'),
 			'alamat' => $this->input->post('alamat'),
 			'phone' => $this->input->post('phone'),
 			'status' => $this->input->post('status'),
 			'jumlah' => $this->input->post('jumlah'),
 			'tanggal' => $this->input->post('tanggal')
 		);
 	$this->m_admin->update_order_product(array('id' => $this->input->post('id')), $data);
 	echo json_encode(array("status" => TRUE));
 	}

	public function order_product_delete($id){
 		$this->load->model('m_admin');
 		$this->m_admin->delete_by_id_order_product($id);
 		echo json_encode(array("status" => TRUE));
 	}

	public function simpan_order_product(){
 		$this->load->model('m_admin');
 		$this->input->post('submit');
 		$this->m_admin->simpan_order_product();
 		redirect('admin/order_product');
 	}
 	// Controller Data Order Produk End //

 	// Controller Data Order Detail Start //
 	public function order_detail(){
 		$data['judul'] = "NJr Shop | Laporan Order Detail";
 		$this->load->model('m_admin');
 		$data['dataorderdetail'] = $this->m_admin->get_order_detail_all();
 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_order_detail', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function order_detail_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_order_detail();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $order_detail) {
 			$no++;
 			$row = array();
 			$row[] = $order_detail->id_order;
 			$row[] = $order_detail->id_produk;
 			$row[] = $order_detail->jumlah;
 			$row[] = $order_detail->harga;
 			$row[] = '<a href=javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_order_detail('."'".$order_detail->id_order."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a> <a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_order_detail('."'".$order_detail->id_order."'".')"> <span class="glyphicon glyphicon-trash"> </span> Hapus </a>';
 			$data[] = $row;
 		}
 		$output = array(
 			"draw" => $_POST['draw'],
 			"recordsTotal" => $this->m_admin->count_all_order_detail(),
 			"recordsFiltered" => $this->m_admin->count_flitered_order_detail(),
 			"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function order_detail_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_order_detail($id);
 		echo json_encode($data);
 	}

 	public function order_detail_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id_order' => $this->input->post('id_order'),
 			'id_produk' => $this->input->post('id_produk'),
 			'jumlah' => $this->input->post('jumlah'),
 			'harga' => $this->input->post('harga')
 		);
 		$insert = $this->m_admin->save_order_detail($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function order_detail_update(){
 		$this->load->model('m_admin');
 		$data = array(
 			'id_order' => $this->input->post('id_order'),
 			'id_produk' => $this->input->post('id_produk'),
 			'jumlah' => $this->input->post('jumlah'),
 			'harga' => $this->input->post('harga')
 		);
 		$this->m_admin->update_order_detail(array('id_order' => $this->input->post('id_order')), $data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function order_detail_delete($id){
 		$this->load->model('m_admin');
 		$this->m_admin->delete_by_id_order_detail($id);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function simpan_order_detail(){
 		$this->load->model('m_admin');
 		$this->input->post('submit');
 		$this->m_admin->simpan_order_detail();
 		redirect('admin/order_detail');
 	}
 	// Controller Data Order Detail End //

 	// Controller Data Orders Start //
 	public function orders(){
 		$data['judul'] = "NJr Shop | Laporan Orders";
 		$this->load->model('m_admin');
 		$data['dataorders'] = $this->m_admin->get_orders_all();
 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_orders', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function orders_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_orders();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $orders){
 			$no++;
 			$row = array();
 			$row[] = $orders->serial;
 			$row[] = $orders->date;
 			$row[] = $orders->customerid;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_orders('."'".$orders->serial."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a> <a href="javascript:void(0)" class="btn btn-danger" title="hapus" onclick="delete_orders('."'".$orders->serial."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 			"draw" => $_POST['draw'],
 			"recordsTotal" => $this->m_admin->count_all_orders(),
 			"recordsFiltered" => $this->m_admin->count_flitered_orders(),
 			"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function orders_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_orders($id);
 		echo json_encode($data);
 	}

 	public function orders_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'serial' => $this->input->post('serial'),
 			'date' => $this->input->post('date'),
 			'customerid' => $this->input->post('customerid')
 		);
 		$insert = $this->m_admin->save_orders($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function orders_update(){
 		$this->load->model('m_admin');
 		$data = array(
 			'serial' => $this->input->post('serial'),
 			'date' => $this->input->post('date'),
 			'customerid' => $this->input->post('customerid'),
 		);
 		$this->m_admin->update_orders(array('serial' => $this->input->post('serial')), $data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function orders_delete($id){
 		$this->load->model('m_admin');
 		$this->m_admin->delete_by_id_orders($id);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function simpan_orders(){
 		$this->load-model('m_admin');
 		$this->input->post('submit');
 		$this->m_admin->simpan_orders();
 		redirect('admin/orders');
 	}
 	// Controller Data Orders End // 

 	// Controller Data Customers Start //
 	public function customers(){
 		$data['judul'] = "NJr Shop | Laporan Data Customers";
 		$this->load->model('m_admin');
 		$data['datacustomers'] = $this->m_admin->get_customers_all();
 		$this->load->view('admin/v_headers', $data);
 		$this->load->view('admin/v_customers', $data);
 		$this->load->view('admin/v_footer', $data);
 	}

 	public function customers_list(){
 		$this->load->model('m_admin');
 		$list = $this->m_admin->get_datatables_customers();
 		$data = array();
 		$no = $_POST['start'];
 		foreach ($list as $customers){
 			$no++;
 			$row = array();
 			$row[] = $customers->serial;
 			$row[] = $customers->nama;
 			$row[] = $customers->email;
 			$row[] = $customers->alamat;
 			$row[] = $customers->no_hp;
 			$row[] = '<a href="javascript:void(0)" class="btn btn-primary" title="Edit" onclick="edit_customers('."'".$customers->serial."'".')"> <span class="glyphicon glyphicon-pencil"> </span> Edit </a> <a href="javascript:void(0)" class="btn btn-danger" title="Hapus" onclick="delete_customers('."'".$customers->serial."'".')"> <span class="glyphicon glyphicon-trash"> </span> Delete </a>';
 			$data[] = $row;
 		}
 		$output = array(
 			"draw" => $_POST['draw'],
 			"recordsTotal" => $this->m_admin->count_all_customers(),
 			"recordsFiltered" => $this->m_admin->count_flitered_customers(),
 			"data" => $data
 		);
 		echo json_encode($output);
 	}

 	public function customers_edit($id){
 		$this->load->model('m_admin');
 		$data = $this->m_admin->get_by_id_customers($id);
 		echo json_encode($data);
 	}

 	public function customers_add(){
 		$this->load->model('m_admin');
 		$data = array(
 			'serial' => $this->input->post('serial'),
 			'nama' => $this->input->post('nama'),
 			'email' => $this->input->post('email'),
 			'alamat' => $this->input->post('alamat'),
 			'no_hp' => $this->input->post('no_hp')
 		);
 		$insert = $this->m_admin->save_customers($data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function customers_update(){
 		$this->load->model('m_admin');
 		$data = array(
 			'serial' => $this->input->post('serial'),
 			'nama' => $this->input->post('nama'),
 			'email' => $this->input->post('email'),
 			'alamat' => $this->input->post('alamat'),
 			'no_hp' => $this->input->post('no_hp')
 		);
 		$this->m_admin->update_customer(array('serial' => $this->input->post('serial')), $data);
 		echo json_encode(array("status" => TRUE));
 	}

 	public function customers_delete($id){
 		$this->load->model('m_admin');
 		$this->input->post('submit');
 		$this->m_admin->simpan_customers();
 		redirect('admin/customers');
 	}
 	// Controller Data Customers End //

 	// Controller Cetak PDF Laporan Pembelian Start // 
 	public function cetak_pdf_lap_pembelian(){
 		$this->load->model('m_admin');
 		$data['data'] = $this->m_admin->get_laporan_pembelian_cetak();

 		ob_start();
 		$content = $this->load->view('admin/cetak/v_laporan_pembelian', $data);
 		$content = ob_get_clean();
 		$this->load->library('html2pdf');
 		try
 		{
 			$html2pdf = new HTML2PDF('P', 'A3', 'fr');
 			$html2pdf->pdf->SetDisplayMode('fullpage');
 			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 			$html2pdf->output('print_laporan_pembelian.pdf');
 		}
 		catch(HTML2PDF_exception $e){
 			echo $e;
 			exit;
 		}
 	}
 	// Controller Cetak PDF Laporan Pembelian End //

 	// Controller Cetak PDF Order Produk Start //
 	public function cetak_pdf_order_produk(){
 		$this->load->model('m_admin');
 		$data['data'] = $this->m_admin->get_order_produk_cetak();

 		ob_start();
 		$content = $this->load->view('admin/cetak/v_order_produk', $data);
 		$content = ob_get_clean();
 		$this->load->library('html2pdf');
 		try
 		{
 			$html2pdf = new HTML2PDF('P', 'A3', 'fr');
 			$html2pdf->pdf->SetDisplayMode('fullpage');
 			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 			$html2pdf->output('print_order_produk.pdf');
 		}
 		catch(HTML2PDF_exception $e){
 			echo $e;
 			exit;
 		}
 	}
 	// Controller Cetak PDF Order Produk End //

 	// Controller Cetak PDF Orders Start //
 	public function cetak_pdf_orders(){
 		$this->load->model('m_admin');
 		$data['data'] = $this->m_admin->get_orders_cetak();

 		ob_start();
 		$content = $this->load->view('admin/cetak/v_orders', $data);
 		$content = ob_get_clean();
 		$this->load->library('html2pdf');

 		try
 		{
 			$html2pdf = new HTML2PDF('P', 'A3', 'fr');
 			$html2pdf->pdf->SetDisplayMode('fullpage');
 			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 			$html2pdf->output('print_orders.pdf');
 		}
 		catch(HTML2PDF_exception $e){
 			echo $e;
 			exit;
 		}
 	}
 	// Controller Cetak PDF Orders End //

 	// Controller Cetak PDF Order Detail Start //
 	public function cetak_pdf_order_detail(){
 		$this->load->model('m_admin');
 		$data['data'] = $this->m_admin->get_order_detail_cetak();

 		ob_start();
 		$content = $this->load->view('admin/cetak/v_order_detail', $data);
 		$content = ob_get_clean();
 		$this->load->library('html2pdf');

 		try
 		{
 			$html2pdf = new HTML2PDF('P', 'A3', 'fr');
 			$html2pdf->pdf->SetDisplayMode('fullpage');
 			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 			$html2pdf->output('print_order_detail.pdf');
 		}
 		catch(HTML2PDF_exception $e){
 			echo $e;
 			exit;
 		}
 	}
 	// Controller Cetak PDF Order Detail End //

 	// Controller Cetak Excel Laporan Pembelian Start //
 	public function cetak_excel_lap_pembelian(){
 		$this->load->library(array('PHPExcel/PHPExcel'));
 		$this->load->library(array('PHPExcel/IOFactory'));
 		$this->load->model('m_admin');
 		$ambildata = $this->m_admin->get_laporan_pembelian_cetak();

 		if(count($ambildata) > 0){
 			$objPHPExcel = new PHPExcel();

 			$objPHPExcel->getproperties()
 						->setCreator('Nadzief')
 						->setTitle('PHP To Excel');

 			$objset = $objPHPExcel->setActiveSheetIndex(0);
 			$objget = $objPHPExcel->getActiveSheet();

 			$objget->setTitle('Sample Sheet');
 			$objget->getStyle("A4:O4")->applyFromArray(
 				array(
 					'fill' => array(
 								'type' => PHPEXcel_Style_fill::FILL_SOLID,
 								'color' => array('rgb' => '92d050')
 							  ),
 					'font' => array(
 								'color' => array('rgb' => '000000')
 							  )
 				)
 			);

 			$cols = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O");
 			$val = array("No", "Id", "Nama", "No. Hp", "Email", "Alamat", "Kabupaten", "Jasa Pengiriman", "Desa", "Provinsi", "Kode Pos", "Kecamatan", "Jam", "Tanggal", "Status");
 			$baris = 4;
 			$baris2 = 2;

 			$judul = array("F");
 			$isi = array("Data Laporan Pembelian");

 			for($i = 0; $i < count($cols); $i++){
 				$objset->setCellValue($cols[$i].$baris, $val[$i]);

 				$style = array(
 						'alignment' => array(
 								'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 						)
 				);
 				$objPHPExcel->getActiveSheet()->getStyle($cols[$i].$baris)->applyFromArray($style);
 			}

 			for ($no = 0; $no < count($judul); $no++) {
 				$objset->setCellValue($judul[$no].$baris2, $isi[$no]);

 				$style2 = array(
 							'alignment' => array(
 									'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 							)
 				);
 				$objPHPExcel->getActiveSheet()->getStyle($judul[$no].$baris)->applyFromArray($style2);
 			}

 			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(5);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(20);

 			$baris = 5;
 			$u = 1;
 			foreach($ambildata as $row){
 				$objset->setCellValue("A".$baris, $u);
 				$objset->setCellValue("B".$baris, $row->id);
 				$objset->setCellValue("C".$baris, $row->nama);
 				$objset->setCellValue("D".$baris, $row->no_hp.' ');
 				$objset->setCellValue("E".$baris, $row->email);
 				$objset->setCellValue("F".$baris, $row->alamat);
 				$objset->setCellValue("G".$baris, $row->kabupaten);
 				$objset->setCellValue("H".$baris, $row->jasa_pengiriman);
 				$objset->setCellValue("I".$baris, $row->desa);
 				$objset->setCellValue("J".$baris, $row->provinsi);
 				$objset->setCellValue("K".$baris, $row->kode_pos.' ');
 				$objset->setCellValue("L".$baris, $row->kecamatan);
 				$objset->setCellValue("M".$baris, $row->jam);
 				$objset->setCellValue("N".$baris, $row->tgl);
 				$objset->setCellValue("O".$baris, $row->status);

 				$u++;
                $baris++;
 			}

 			$objPHPExcel->getActiveSheet()->getStyle('F1:F'.$baris)->getNumberFormat()->setFormatCode('0');
 			$objPHPExcel->getActiveSheet()->setTitle('Data Export');
 			$objPHPExcel->getActiveSheetIndex(0);

 			$filename = urlencode("Data".date("Y-m-d H:i:s").".xls");
 				
 				header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="'.$filename.'"');
                header('Cache-Control: max-age=0');

 			$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel2007');
 			$objWriter->save('php://output'); 
 		}
 		else{
 			redirect('admin/laporan_pembelian','refresh');
 		}
 	}
 	// Controller Cetak Excel Laporan Pembelian End //

 	// Controller Cetak Excel Order Produk Start //
 	public function cetak_excel_order_produk(){
 		$this->load->library(array('PHPExcel/PHPExcel'));
 		$this->load->library(array('PHPExcel/IOFactory'));
 		$this->load->model('m_admin');
 		$ambildata = $this->m_admin->get_order_produk_cetak();

 		if(count($ambildata) > 0){
 			$objPHPExcel = new PHPExcel();

 			$objPHPExcel->getproperties()
 						->setCreator('Nadzief')
 						->setTitle('PHP To Excel');

 			$objset = $objPHPExcel->setActiveSheetIndex(0);
 			$objget = $objPHPExcel->getActiveSheet();

 			$objget->setTitle('Sample Sheet');
 			$objget->getStyle("A4:K4")->applyFromArray(
 				array(
 					'fill' => array(
 								'type' => PHPEXcel_Style_fill::FILL_SOLID,
 								'color' => array('rgb' => '92d050')
 							  ),
 					'font' => array(
 								'color' => array('rgb' => '000000')
 							  )
 				)
 			);

 			$cols = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K");
 			$val = array("No", "Id", "ID Produk", "ID Pemesan", "Nama", "Email", "Alamat", "Phone", "Status", "Jumlah", "Tanggal");
 			$baris = 4;
 			$baris2 = 2;

 			$judul = array("F");
 			$isi = array("Data Order Produk");

 			for($i = 0; $i < count($cols); $i++){
 				$objset->setCellValue($cols[$i].$baris, $val[$i]);

 				$style = array(
 						'alignment' => array(
 								'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 						)
 				);
 				$objPHPExcel->getActiveSheet()->getStyle($cols[$i].$baris)->applyFromArray($style);
 			}

 			for ($no = 0; $no < count($judul); $no++) {
 				$objset->setCellValue($judul[$no].$baris2, $isi[$no]);

 				$style2 = array(
 							'alignment' => array(
 									'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 							)
 				);
 				$objPHPExcel->getActiveSheet()->getStyle($judul[$no].$baris)->applyFromArray($style2);
 			}

 			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(5);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(15);

 			$baris = 5;
 			$u = 1;
 			foreach($ambildata as $row){
 				$objset->setCellValue("A".$baris, $u);
 				$objset->setCellValue("B".$baris, $row->id);
 				$objset->setCellValue("C".$baris, $row->id_product);
 				$objset->setCellValue("D".$baris, $row->id_pemesan);
 				$objset->setCellValue("E".$baris, $row->nama);
 				$objset->setCellValue("F".$baris, $row->email);
 				$objset->setCellValue("G".$baris, $row->alamat);
 				$objset->setCellValue("H".$baris, $row->phone);
 				$objset->setCellValue("I".$baris, $row->status);
 				$objset->setCellValue("J".$baris, $row->jumlah);
 				$objset->setCellValue("K".$baris, $row->tanggal);

 				$u++;
                $baris++;
 			}

 			$objPHPExcel->getActiveSheet()->getStyle('F1:F'.$baris)->getNumberFormat()->setFormatCode('0');
 			$objPHPExcel->getActiveSheet()->setTitle('Data Export');
 			$objPHPExcel->getActiveSheetIndex(0);

 			$filename = urlencode("Data Order Produk.xls");
 				
 				header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="'.$filename.'"');
                header('Cache-Control: max-age=0');

 			$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel2007');
 			$objWriter->save('php://output'); 
 		}
 		else{
 			redirect('admin/order_product','refresh');
 		}
 	}
 	// Controller Cetak Excel Order Produk End //

 	// Controller Cetak Excel Orders Start //
 	public function cetak_excel_orders(){
 		$this->load->library(array('PHPExcel/PHPExcel'));
 		$this->load->library(array('PHPExcel/IOFactory'));
 		$this->load->model('m_admin');
 		$ambildata = $this->m_admin->get_orders_cetak();

 		if(count($ambildata) > 0){
 			$objPHPExcel = new PHPExcel();

 			$objPHPExcel->getproperties()
 						->setCreator('Nadzief')
 						->setTitle('PHP To Excel');

 			$objset = $objPHPExcel->setActiveSheetIndex(0);
 			$objget = $objPHPExcel->getActiveSheet();

 			$objget->setTitle('Sample Sheet');
 			$objget->getStyle("A4:D4")->applyFromArray(
 				array(
 					'fill' => array(
 						'type' => PHPEXcel_Style_fill::FILL_SOLID,
 						'color' => array(
 							'rgb' => '92d050'
 						)
 					),
 					'font' => array(
 						'color' => array(
 							'rgb' => '000000'
 						)
 					)
 				)
 			);

 			$cols = array("A", "B", "C", "D");
 			$val = array("No", "Serial", "Tanggal" , "Id Customers");
 			$baris = 4;
 			$baris2 = 2;

 			$judul = array("F");
 			$isi = array("Data Orders");

 			for ($i = 0; $i < count($cols); $i++) {
 				$objset->setCellValue($cols[$i].$baris, $val[$i]);

 				$style = array(
 					'alignment' => array(
 						'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 					)
 				);
 				$objPHPExcel->getActiveSheet()->getStyle($cols[$i].$baris)->applyFromArray($style);
 			}

 			for ($no = 0; $no < count($judul); $no++) {
 				$objset->setCellValue($judul[$no].$baris2, $isi[$no]);
 				
 				$style2 = array(
 					'alignment' => array(
 						'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 					)
 				);
 				$objPHPExcel->getActiveSheet()->getStyle($judul[$no].$baris2)->applyFromArray($style2);
 			}

 			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(5);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
 			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);

 			$baris = 5;
 			$u = 1;
 			foreach ($ambildata as $row) {
 				$objset->setCellValue("A".$baris, $u);
 				$objset->setCellValue("B".$baris, $row->serial);
 				$objset->setCellValue("C".$baris, $row->date);
 				$objset->setCellValue("D".$baris, $row->customerid);

 				$u++;
 				$baris++;
 			}

 			$objPHPExcel->getActiveSheet()->getStyle('F1:F'.$baris)->getNumberFormat()->setFormatCode('0');
 			$objPHPExcel->getActiveSheet()->setTitle('Data Export');
 			$objPHPExcel->getActiveSheetIndex(0);

 			$filename = urlencode("Data Laporan Orders.xls");
 				header('Content-Type: application/vnd.ms-excel');
 				header('Content-Disposition: attachment;filename="'.$filename.'"');
 				header('Cache-Control: max-age=0');

 			$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel2007');
 			$objWriter->save('php://output');
 		}
 		else {
 			redirect('admin/orders', 'refresh');
 		}
 	}
 	// Controller Cetak Excel Orders End //

 	// Controller Cetak Excel Order Detail Start //
 	public function cetak_excel_order_detail(){
 		$this->load->library(array('PHPExcel/PHPExcel'));
 		$this->load->library(array('PHPExcel/IOFactory'));
 		$this->load->model('m_admin');

 		$ambildata = $this->m_admin->get_order_detail_cetak();
 		if(count($ambildata) > 0){
 			$objPHPExcel = new PHPExcel();
 			$objPHPExcel->getproperties()
 		    			->setCreator('Nadzief')
 		    			->setTitle('PHP To Excel');

 		    $objset = $objPHPExcel->setActiveSheetIndex(0);
 		    $objget = $objPHPExcel->getActiveSheet();

 		    $objget->setTitle('Sample Sheet');
 		    $objget->getStyle("A4:E4")->applyFromArray(
 		    	array(
 		    		'fill' => array(
 		    			'type' => PHPEXcel_Style_fill::FILL_SOLID,
 		    			'color' => array(
 		    				'rgb' => '92d050'
 		    			)
 		    		),
 		    		'font' => array(
 		    			'color' => array(
 		    				'rgb' => '000000'
 		    			)
 		    		)
 		    	)
 		    );

 		    $cols = array("A", "B", "C", "D", "E");
 		    $val = array("No", "Id Order", "Id Produk", "Jumlah", "Harga");
 		    $baris = 4;
 		    $baris2 = 2;
 		    $judul = array("F");
 		    $isi = array("Data Order Detail");

 		    for ($i = 0; $i < count($cols); $i++) {
 		    	$objset->setCellValue($cols[$i].$baris, $val[$i]);
 		    	$style = array(
 		    		'alignment' => array(
 		    			'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 		    		)
 		    	);
 		    	$objPHPExcel->getActiveSheet()->getStyle($cols[$i].$baris)->applyFromArray($style);
 		    }

 		    for ($no = 0; $no < count($judul); $no++) {
 		    	$objset->setCellValue($judul[$no].$baris2, $isi[$no]);

 		    	$style2 = array(
 		    		'alignment' => array(
 		    			'horizontal' => PHPEXcel_Style_Alignment::VERTICAL_CENTER,
 		    		)
 		    	);
 		    	$objPHPExcel->getActiveSheet()->getStyle($judul[$no].$baris2)->applyFromArray($style2);
 		    }

 		    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
 		    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
 		    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
 		    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
 		    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);

 		    $baris = 5;
 		    $u = 1;

 		    foreach ($ambildata as $row) {
 		    	$objset->setCellValue("A".$baris, $u);
 		    	$objset->setCellValue("B".$baris, $row->id_order);
 		    	$objset->setCellValue("C".$baris, $row->id_produk);
 		    	$objset->setCellValue("D".$baris, $row->jumlah);
 		    	$objset->setCellValue("E".$baris, $row->harga);

 		    	$u++;
 		    	$baris++;
 		    }

 		    $objPHPExcel->getActiveSheet()->getStyle('F1:F'.$baris)->getNumberFormat()->setFormatCode('0');
 		    $objPHPExcel->getActiveSheet()->setTitle('Data Export');
 		    $objPHPExcel->getActiveSheetIndex(0);

			$filename = urlencode("Data Order Detail.xls");
 				
 				header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment;filename="'.$filename.'"');
                header('Cache-Control: max-age=0');

 			$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel2007');
 			$objWriter->save('php://output'); 
 		}
 		else{
 			redirect('admin/order_detail','refresh');
 		}
 	}
 	// Controller Cetak Excel Order Detail End //

 	public function get_category(){
 		$data['produk'] = $this->m_admin->get_category();
 		$this->load->view('tes', $data);
 	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent ::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('upload');
		$this->load->database();
		$this->session->userdata('username');
		$this->load->library(array('form_validation'));
		$this->load->model('m_web');
	}

	public function index(){
		$data['judul'] = "NJr Shop";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['produk_alatmusik'] = $this->m_web->get_produk_alat_musik();
		$data['produk_hp'] = $this->m_web->get_produk_hp();
		$data['produk_komputer'] = $this->m_web->get_produk_komputer();
		$data['produk_laptop'] = $this->m_web->get_produk_laptop();
		$data['produk_sepatu'] = $this->m_web->get_produk_sepatu();
		$data['produk_jersey'] = $this->m_web->get_produk_jersey();
		$this->load->view('v_headers', $data);
		$this->load->view('v_slideshow', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_isi', $data);	
		$this->load->view('V_footer', $data);
	}

	public function get_by_id($id_produk){
		$this->load->model('m_web');
		$data = $this->m_web->get_by_id($id_produk);
		echo json_encode($data);
	}

	public function index_aboutus(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['dataaboutus'] = $this->m_web->get_aboutus();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['judul'] = "NJr Shop | About Us";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_aboutus', $data);
		$this->load->view('v_footer', $data);
	}

	public function index_kontak(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datakontak'] = $this->m_web->get_kontak();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['judul'] = "NJr Shop | Contact Us";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_kontak', $data);
		$this->load->view('v_footer', $data);
	}

	public function index_howtobuy(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_howtobuy();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['judul'] = "NJr Shop | How To Buy";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_howtobuy', $data);
		$this->load->view('v_footer', $data);
	}

	public function index_howtopay(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtopay'] = $this->m_web->get_howtopay();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['judul'] = "NJr Shop | How To Buy";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_howtopay', $data);
		$this->load->view('v_footer', $data);
	}

	public function index_kategori_produk($id){
		$data['judul'] = "NJr Shop | Kategori Produk";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_testimoni();
		$data['dataitem'] = $this->m_web->get_howtobuy();
		$data['dataprodukkategori'] = $this->m_web->get_produk_kategori($id);
		$data['dataproduk'] = $this->m_web->get_produk();
		$data['username'] = $this->session->userdata('username');
		$lihat_keranjang = $this->cart->contents();
		$this->load->view('v_header', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_produk_kategori', $data);
		$this->load->view('v_footer', $data);
	}

	public function home(){
   		$data['judul'] = "NJr Shop";
		$data['username'] = $this->session->userdata('username');
		$data['foto'] = $this->session->userdata('foto');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['produk_alatmusik'] = $this->m_web->get_produk_alat_musik();
		$data['produk_hp'] = $this->m_web->get_produk_hp();
		$data['produk_komputer'] = $this->m_web->get_produk_komputer();
		$data['produk_laptop'] = $this->m_web->get_produk_laptop();
		$data['produk_sepatu'] = $this->m_web->get_produk_sepatu();
		$data['produk_jersey'] = $this->m_web->get_produk_jersey();
			if (!$this->cart->contents()){
				$this->data['message'] = '<p>Your cart is empty!</p>';
			}
			else{
				$this->data['message'] = $this->session->flashdata('message');
			}
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_slideshow', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_home', $data);	
		$this->load->view('V_footer', $data);
	}

	public function aboutus(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['dataaboutus'] = $this->m_web->get_aboutus();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['judul'] = "NJr Shop | About Us";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_aboutus', $data);
		$this->load->view('v_footer', $data);
	}

	public function kontak(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datakontak'] = $this->m_web->get_kontak();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['judul'] = "NJr Shop | Contact Us";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_kontak', $data);
		$this->load->view('v_footer', $data);
	}

	public function howtobuy(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_howtobuy();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['judul'] = "NJr Shop | How To Buy";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_howtobuy', $data);
		$this->load->view('v_footer', $data);
	}

	public function howtopay(){
		$this->load->model('m_web');
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtopay'] = $this->m_web->get_howtopay();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['datanorek'] = $this->m_web->get_no_rek();
		$data['judul'] = "NJr Shop | How To Pay";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_howtopay', $data);
		$this->load->view('v_footer', $data);
	}

	public function testimoni(){
		$this->load->model('m_web');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pesan = $this->input->post('pesan');
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pesan' => $pesan
		);
		$this->m_web->insert_testimoni($data,'testimoni');
		echo "<script> alert('Testimoni berhasil dikirim. Terima kasih karena sudah mengisi testimonial') </script>";
		redirect('web/home','refresh');
	}

	public function profil($id){
		$data['judul'] = "NJr Shop | Profil User";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_howtobuy();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['datadetailanggota'] = $this->m_web->get_detail_anggota($id);
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_profil_user', $data);
		$this->load->view('v_footer', $data);
	}

	public function edit_profil($id){
		$data['judul'] = "NJr Shop | Profil User";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_howtobuy();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['datadetailanggota'] = $this->m_web->get_detail_anggota($id);
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_edit_profil_user', $data);
		$this->load->view('v_footer', $data);
	}

	public function update_data($id){
		if($this->input->post('submit')){ 
        	$this->m_web->update_data($id); 
        	redirect('web/home');
    	}
	}

	public function profil_edit($id){
		$data = $this->m_web->get_by_id_profil($id);
		echo json_encode($data);
	}

	public function profil_update(){
		$data = array(
			'id_anggota' => $this->input->post('id_anggota'),
			'nama_lengkap'  => $this->input->post('nama_lengkap'),
      		'username'=> $this->input->post('username'),
      		'password' => $this->input->post('password'),
      		'no_hp' => $this->input->post('no_hp'),
      		'email' => $this->input->post('email'),
      		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      		'alamat' => $this->input->post('alamat'),
      		'kota' => $this->input->post('kota'),
      		'no_rek' => $this->input->post('no_rek')
		);
		$this->m_web->profil_update($data, array('id_anggota' => $this->input->post('id_anggota')));
		echo json_encode(array("status" => TRUE));
	}

	public function aksi_upload(){
		$config['upload_path']		= 'foto/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['max_size']			= 50000;
		$config['max_width']		= 10000;
		$config['max_height']		= 10000;
		$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				redirect('web/profil/'.$id);
			}	
	}

	public function get_testimoni(){
		$this->load->model('m_web');
		$data['datatestimoni'] = $this->m_web->get_testimoni();
	}

	public function add($id){
		$ambilData = $this->m_web->get_produk_cart('produk', $id);
			$data = array(
				'id' => $ambilData->id_produk,
				'gambar' => $ambilData->gambar,
				'qty' => 1,
				'price' => $ambilData->harga,
				'name' => $ambilData->nama_produk
			);
		$this->cart->insert($data); 
		redirect('web/cart');
	}

	public function cart(){
		$data['judul'] = "NJr Shop | Keranjang Belanja";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_howtobuy();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['username'] = $this->session->userdata('username');
		$data['chart'] = $this->m_web->get_produk();
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_cart', $data);
		$this->load->view('v_footer', $data);
	}

	public function hapus($rowid){
		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		redirect('web/cart','refresh');
	}

	public function update(){
		$i = 1;
		foreach ($this->cart->contents() as $produk) {
			$this->cart->update(array('rowid' => $produk['rowid'], 'qty' => $_POST['qty'.$i]));
			$i++;
		}
		redirect('web/cart','refresh');
	}

	public function clear_cart(){
		$this->cart->destroy();
		redirect('web/cart','refresh');
	}

	public function index_detail_produk($id){
		$data['judul'] = "NJr Shop | Detail Produk";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_testimoni();
		$data['dataitem'] = $this->m_web->get_howtobuy();
		$data['dataproduk'] = $this->m_web->get_detail_produk($id);
		$data['username'] = $this->session->userdata('username');
		$lihat_keranjang = $this->cart->contents();
		$this->load->view('v_header', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_detail_produk', $data);
		$this->load->view('v_footer', $data);
	}

	public function detail_produk($id){
		$data['judul'] = "NJr Shop | Detail Produk";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_testimoni();
		$data['dataitem'] = $this->m_web->get_howtobuy();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['dataproduk'] = $this->m_web->get_detail_produk($id);
		$data['username'] = $this->session->userdata('username');
		$lihat_keranjang = $this->cart->contents();
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_detail_produk', $data);
		$this->load->view('v_footer', $data);
	}

	public function kategori_produk($id){
		$data['judul'] = "NJr Shop | Kategori Produk";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataitem'] = $this->m_web->get_howtobuy();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['dataprodukkategori'] = $this->m_web->get_produk_kategori($id);
		$data['username'] = $this->session->userdata('username');
		$lihat_keranjang = $this->cart->contents();
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_produk_kategori', $data);
		$this->load->view('v_footer', $data);
	}

	public function check_out(){
		$data['judul'] = "NJr Shop | Check Out";
		$data['datakategori'] = $this->m_web->get_kategori();
		$data['datahowtobuy'] = $this->m_web->get_howtobuy();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['dataongkir'] = $this->m_web->get_ongkir();
		$get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();
		$data['provinsi'] = $get_prov->result();
		$data['path'] = base_url('assets');
		$data['username'] = $this->session->userdata('username');
		$data['id'] = $this->m_web->create_id();
		$data['chart'] = $this->m_web->get_produk();
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_check_out', $data);
		$this->load->view('v_footer', $data);
	}

	public function insert_check_out(){
		$cart = $this->cart->contents();
		$customer = array(
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('no_hp')
		);
		$customer_id = $this->m_web->insert_customer($customer);
		$order = array(
				'date' => date('Y-m-d'),
				'customerid' => $customer_id
		);
		$order_id = $this->m_web->insert_order($order);
		if($cart = $this->cart->contents()){
			foreach ($cart as $items){
				$order_detail = array(
					'id_order' => $order_id,
					'id_produk' => $items['id'],
					'jumlah' => $items['qty'],
					'harga' => $items['price']
				);
				$order_detail_id = $this->m_web->insert_order_detail($order_detail);
			}
		}

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$jasa_pengiriman = $this->input->post('jasa_pengiriman');
		$provinsi = $this->input->post('provinsi');
		$kabupaten = $this->input->post('kabupaten');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('desa');
		$kode_pos = $this->input->post('kode_pos');
		$alamat = $this->input->post('alamat');
		$tgl = $this->input->post('tgl');
		$jam = $this->input->post('jam');

		$data = array(
			'nama' => $nama,
			'no_hp' => $no_hp,
			'email' => $email,
			'jasa_pengiriman' => $jasa_pengiriman,
			'provinsi' => $provinsi,
			'kabupaten' => $kabupaten,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'kode_pos' => $kode_pos,
			'alamat' => $alamat,
			'tgl' => $tgl,
			'jam' => $jam,
			'status' => 'Pending',
		);
		$this->m_web->insert_check_out($data);
		redirect('web/invoice/'.$id);
	}

	public function add_ajax_kab($id_prov)
	{
    	$query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
    	$data = "<option value=''>- Select Kabupaten -</option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}
  
	public function add_ajax_kec($id_kab)
	{
    	$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
    	$data = "<option value=''> - Pilih Kecamatan - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}
  
	public function add_ajax_des($id_kec)
	{
    	$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
    	$data = "<option value=''> - Pilih Desa - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}

	public function invoice(){
		$id = $this->uri->segment(3);
		$data['judul'] = "NJr Shop | Invoice";
		$data['datakategori'] = $this->m_web->get_kategori();
		//$data['dataproduk'] = $this->m_web->get_all_produk();
		$data['datahowtobuy'] = $this->m_web->get_howtobuy();
		$data['datatestimoni'] = $this->m_web->get_testimoni();
		$data['dataanggota'] = $this->m_web->get_anggota();
		$data['datapembelian'] = $this->m_web->get_lap_pembelian($id);
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_header_after_login', $data);
		$this->load->view('v_kiri', $data);
		$this->load->view('v_invoice', $data);
		$this->load->view('v_footer', $data);
	}

	public function cetak_invoice(){
		$id  = $this->uri->segment(3);
		$data['judul'] = "NJr Shop | Cetak Invoice";
		$data['dataproduk'] = $this->m_web->get_all_produk();
		$data['datapembelian'] = $this->m_web->get_lap_pembelian($id);
		$this->load->view('v_cetak_invoice', $data);
	}

	public function selesai(){
		$this->m_web->selesai();
		$this->cart->destroy();
		echo "<script> alert('Transaksi Sudah Selesai. Terima Kasih Sudah Berbelanja Di NJr-Shop') </script>";
		redirect('web/home','refresh');
	}

	public function show($id){
		$lihat_keranjang = $this->m_web->get_lap_pembelian($id);
		echo '<pre>';
		print_r($lihat_keranjang);
	}

	public function tes(){
		//$this->load->view('v_headers');
		$this->load->view('v_footers');
	}

	/* public function billing_view(){
		$this->load->view('v_header_after_login');
		$this->load->view('billing_view');
		$this->load->view('v_footer');
	}

	public function save_order(){
		$customer = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone')
			);
		$cust_id = $this->billing_model->insert_customer($customer);

		$order = array(
			'date' => date('Y-m-d'),
			'customerid' => $cust_id
			);
		$ord_id = $this->billing_model->insert_order($order);

		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' => $ord_id,
					'productid' => $item['id'],
					'quantity' => $item['qty'],
					'price' => $item['price']
					);
		$cust_id = $this->billing_model->insert_order_detail();

		endforeach;
		endif;

		$this->load->view('billing_success'); 
	} */


	/*  Pagination

		$config['base_url']=base_url()."web/home";
        $config['total_rows']= $this->db->query("SELECT * FROM produk_alatmusik;")->num_rows();
        $config['per_page']=4;
        $config['num_links'] = 2;
        $config['uri_segment']=3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['first_link']='First';
        $config['last_link']='Last';
        $config['next_link']='<span class="glyphicon glyphicon-chevron-right"> </span>';
        $config['prev_link']='<span class="glyphicon glyphicon-chevron-left"> </span>';
        $this->pagination->initialize($config);
        $data['produk']=$this->m_web->getAll($config);
        $data['pagination'] = $this->pagination->create_links(); 

    */

}
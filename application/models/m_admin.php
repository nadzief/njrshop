<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	var $table = "admin";
	var $column_order = array('id_admin','username','password','level');
	var $column_search = array('id_admin','username','password','level');
	var $order = array('id_admin' => 'desc');

	var $table2 = "anggota";
	var $column_order_user = array('id_anggota','nama_lengkap','username','password','no_hp','email','jenis_kelamin','alamat','kota','no_rek','foto');
	var $column_search_user = array('id_anggota','nama_lengkap','username','password','no_hp','email','jenis_kelamin','alamat','kota','no_rek','foto');
	var $order_user = array('id_anggota','nama_lengkap','username','password','no_hp','email','jenis_kelamin','alamat','kota','no_rek','foto');

	var $table3 = "produk";
	var $column_order_produk = array('id_produk','nama_produk','deskripsi','nama_kategori','stok','id_category','harga','gambar','bahan','berat','warna');
	var $column_search_produk = array('id_produk','nama_produk','deskripsi','nama_kategori','stok','id_category','harga','gambar','bahan','berat','warna');
	var $order_produk = array('id_produk','nama_produk','deskripsi','nama_kategori','stok','id_category','harga','gambar','bahan','berat','warna');

	var $table4 = "category";
	var $column_order_kategori_produk = array('id','category');
	var $column_search_kategori_produk = array('id','category');
	var $order_kategori_produk = array('id','category');

	var $table5 = "testimoni";
	var $column_order_testimoni = array('id','nama', 'alamat', 'pesan');
	var $column_search_testimoni = array('id','nama', 'alamat', 'pesan');
	var $order_testimoni = array('id','nama', 'alamat', 'pesan');

	var $table6 = "aboutus";
	var $column_order_aboutus = array('id','judul', 'isi', 'visi', 'misi', 'misi2');
	var $column_search_aboutus = array('id','judul', 'isi', 'visi', 'misi', 'misi2');
	var $order_aboutus = array('id','judul', 'isi', 'visi', 'misi', 'misi2');

	var $table7 = "kontak";
	var $column_order_contactus = array('id','judul', 'telp', 'telp2', 'situs', 'email', 'alamat');
	var $column_search_contactus = array('id','judul', 'telp', 'telp2', 'situs', 'email', 'alamat');
	var $order_contactus = array('id','judul', 'telp', 'telp2', 'situs', 'email', 'alamat');

	var $table8 = "howtobuy";
	var $column_order_howtobuy = array('id','judul', 'q1', 'a1', 'q2', 'a2', 'q3', 'a3', 'q4', 'a4', 'q5', 'a5', 'q6', 'a6', 'q7', 'a7', 'q8', 'a8', 'q9', 'a9');
	var $column_search_howtobuy = array('id','judul', 'q1', 'a1', 'q2', 'a2', 'q3', 'a3', 'q4', 'a4', 'q5', 'a5', 'q6', 'a6', 'q7', 'a7', 'q8', 'a8', 'q9', 'a9');
	var $order_howtobuy = array('id','judul', 'q1', 'a1', 'q2', 'a2', 'q3', 'a3', 'q4', 'a4', 'q5', 'a5', 'q6', 'a6', 'q7', 'a7', 'q8', 'a8', 'q9', 'a9');

	var $table9 = "howtopay";
	var $column_order_howtopay = array('id','judul1', 'isi1', 'judul2', 'isi2');
	var $column_search_howtopay = array('id','judul1', 'isi1', 'judul2', 'isi2');
	var $order_howtopay = array('id','judul1', 'isi1', 'judul2', 'isi2');

	var $table10 = "no_rek";
	var $column_order_no_rek = array('id','bank1', 'no_rek1', 'an1', 'bank2', 'no_rek2', 'an2', 'bank3', 'no_rek3', 'an3', 'bank4', 'no_rek4', 'an4');
	var $column_search_no_rek = array('id','bank1', 'no_rek1', 'an1', 'bank2', 'no_rek2', 'an2', 'bank3', 'no_rek3', 'an3', 'bank4', 'no_rek4', 'an4');
	var $order_no_rek = array('id','bank1', 'no_rek1', 'an1', 'bank2', 'no_rek2', 'an2', 'bank3', 'no_rek3', 'an3', 'bank4', 'no_rek4', 'an4');

	var $table11 = "ongkir";
	var $column_order_ongkir = array('id','jasa_pengiriman');
	var $column_search_ongkir = array('id','jasa_pengiriman');
	var $order_ongkir = array('id','jasa_pengiriman');

	var $table12 = "wilayah_desa";
	var $column_order_wilayah_desa = array('id','kecamatan_id', 'nama');
	var $column_search_wilayah_desa = array('id','kecamatan_id', 'nama');
	var $order_wilayah_desa = array('id','kecamatan_id', 'nama');

	var $table13 = "wilayah_kabupaten";
	var $column_order_wilayah_kabupaten = array('id','provinsi_id', 'nama');
	var $column_search_wilayah_kabupaten = array('id','provinsi_id', 'nama');
	var $order_wilayah_kabupaten = array('id', 'provinsi_id', 'nama');

	var $table14 = "wilayah_kecamatan";
	var $column_order_wilayah_kecamatan = array('id','kabupaten_id', 'nama');
	var $column_search_wilayah_kecamatan = array('id','kabupaten_id', 'nama');
	var $order_wilayah_kecamatan = array('id', 'kabupaten_id', 'nama');

	var $table15 = "wilayah_provinsi";
	var $column_order_wilayah_provinsi = array('id', 'nama');
	var $column_search_wilayah_provinsi = array('id', 'nama');
	var $order_wilayah_provinsi= array('id', 'nama');

	var $table16 = "lap_pembelian";
	var $column_order_laporan_pembelian = array('id', 'nama', 'no_hp', 'email', 'alamat', 'kabupaten', 'jasa_pengiriman', 'desa', 'provinsi', 'kode_pos', 'kecamatan', 'tgl', 'jam', 'status');
	var $column_search_laporan_pembelian = array('id', 'nama', 'no_hp', 'email', 'alamat', 'kabupaten', 'jasa_pengiriman', 'desa', 'provinsi', 'kode_pos', 'kecamatan', 'tgl', 'jam', 'status');
	var $order_laporan_pembelian = array('id', 'nama', 'no_hp', 'email', 'alamat', 'kabupaten', 'jasa_pengiriman', 'desa', 'provinsi', 'kode_pos', 'kecamatan', 'tgl', 'jam', 'status');

	var $table17 = "order_product";
	var $column_order_order_product = array('id', 'id_produk', 'id_pemesan', 'nama', 'email', 'alamat', 'phone', 'status', 'jumlah', 'tanggal');
	var $column_search_order_product = array('id', 'id_produk', 'id_pemesan', 'nama', 'email', 'alamat', 'phone', 'status', 'jumlah', 'tanggal');
	var $order_order_product = array('id', 'id_produk', 'id_pemesan', 'nama', 'email', 'alamat', 'phone', 'status', 'jumlah', 'tanggal');

	var $table18 = "order_detail";
	var $column_order_order_detail = array('id_order', 'id_produk', 'jumlah', 'harga');
	var $column_search_order_detail = array('id_order', 'id_produk', 'jumlah', 'harga');
	var $order_order_detail = array('id_order', 'id_produk', 'jumlah', 'harga');

	var $table19 = "orders";
	var $column_order_orders = array('serial', 'date', 'customerid');
	var $column_search_orders = array('serial', 'date', 'customerid');
	var $order_orders = array('serial', 'date', 'customerid');

	var $table20 = "customers";
	var $column_order_customers = array('serial', 'nama', 'email', 'alamat', 'no_hp');
	var $column_search_customers = array('serial', 'nama', 'email', 'alamat', 'no_hp');
	var $order_customers = array('serial', 'nama', 'email', 'alamat', 'no_hp');
	
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	// Model Admin Start //
	public function get_admin_all()
	{
		$this->db->from($this->table);
		$this->db->where('id_admin');
		$query = $this->db->get();
		return $query->row();	
	}


	public function _get_datatables_query()
	{
		$this->db->from('admin');
		$i = 0;
		foreach ($this->column_search as $item){
			if($_POST['search']['value']) {
				if($i===0){
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}
				else {
					$this->db->or_like($item, $_POST['search']['value']);
				}
				if(count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}

		if(isset($_POST['order'])){
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order)){
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_datatables_admin()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1){
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
	}

	public function get_nama_kategori(){
		$query = $this->db->query("SELECT produk.id_category FROM produk INNER JOIN category ON produk.id_category = category.category");
		return $query;
	}

	public function count_filtered_admin()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_admin()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id_admin($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_admin',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function save_admin($data)
	{
		$this->db->insert('admin', $data);
		return $this->db->insert_id();
	}

	public function update_admin($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id_admin($id)
	{
		$this->db->where('id_admin', $id);
		$this->db->delete($this->table);
	}

	public function simpan_admin()
	{
		$simpan_data=array(
			'id_admin'		=> $this->input->post('id_admin'),
			'username'	=> $this->input->post('username'),
			'password' 	=> $this->input->post('password'),
			'level'	=> $this->input->post('level'),
		);
		$simpan = $this->db->insert('admin', $simpan_data);
		return $simpan;
	}
	// Model Admin End //

	// Model User Start //
	public function get_user_all()
	{
		$this->db->from($this->table2);
		$this->db->where('id_anggota');
		$query = $this->db->get();
		return $query->row();	
	}


	public function _get_datatables_query_user()
	{
		$this->db->from('anggota');
		$i = 0;
		foreach ($this->column_search_user as $item){
			if($_POST['search']['value']) {
				if($i===0){
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}
				else {
					$this->db->or_like($item, $_POST['search']['value']);
				}
				if(count($this->column_search_user) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->column_order_user[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order_user)){
			$order = $this->order_user;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_datatables_user()
	{
		$this->_get_datatables_query_user();
		if($_POST['length'] != -1){
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
	}

	public function count_filtered_user()
	{
		$this->_get_datatables_query_user();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_user()
	{
		$this->db->from($this->table2);
		return $this->db->count_all_results();
	}

	public function get_by_id_user($id)
	{
		$this->db->from($this->table2);
		$this->db->where('id_anggota',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function save_user($data)
	{
		$this->db->insert($this->table2, $data);
		return $this->db->insert_id();
	}

	public function update_user($where, $data)
	{
		$this->db->update($this->table2, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id_user($id)
	{
		$this->db->where('id_anggota', $id);
		$this->db->delete($this->table2);
	}

	public function simpan_user()
	{
		$simpan_data=array(
				'id_anggota' => $this->input->post('id_anggota'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'no_rek' => $this->input->post('no_rek'),
				'foto' => $this->input->post('foto')
		);
		$simpan = $this->db->insert('anggota', $simpan_data);
		return $simpan;
	}
	// Model User End //

	// Model Produk Start //
	public function get_produk_all()
	{
		$this->db->from($this->table3);
		$this->db->where('id_produk');
		$query = $this->db->get();
		return $query->row();	
	}

	public function _get_datatables_query_produk()
	{
		$this->db->from('produk');
		$i = 0;
		foreach ($this->column_search_produk as $item){
			if($_POST['search']['value']) {
				if($i===0){
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}
				else {
					$this->db->or_like($item, $_POST['search']['value']);
				}
				if(count($this->column_search_user) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->column_order_produk[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order_produk)){
			$order = $this->order_produk;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_datatables_produk()
	{
		$this->_get_datatables_query_produk();
		if($_POST['length'] != -1){
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result(); 
		}
	}

	public function get(){
		$this->db->select('produk.id_produk, produk.nama_produk, produk.deskripsi, produk.id_category, produk.nama_kategori, produk.stok, produk.harga, produk.gambar, produk.bahan, produk.berat, produk.warna, category.id, category.category');
		$this->db->from('produk');
		$this->db->join('category', 'category.id = produk.id_category');
		$query = $this->db->get();
		return $query->result(); 
	}

	public function count_filtered_produk()
	{
		$this->_get_datatables_query_produk();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_produk()
	{
		$this->db->from($this->table3);
		return $this->db->count_all_results();
	}

	public function get_by_id_produk($id)
	{
		$this->db->from($this->table3);
		$this->db->where('id_produk',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function save_produk($data)
	{
		$this->db->insert($this->table3, $data);
		return $this->db->insert_id();
	}

	public function update_produk($where, $data)
	{
		$this->db->update($this->table3, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id_produk($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete($this->table3);
	}

	public function simpan_produk()
	{
		$simpan_data=array(
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
		$simpan = $this->db->insert('produk', $simpan_data);
		return $simpan;
	}
	// Model User End //

  	// model kategori produk start //
  	public function get_kategori_produk_all()
  	{
  		$this->db->from($this->table4);
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_kategori_produk()
  	{
  		$this->db->from('category');
  		$i = 0;
  		foreach ($this->column_search_kategori_produk as $item){
  			if ($_POST['search']['value']) {
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_kategori_produk) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_kategori_produk[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_kategori_produk)){
  			$order = $this->order_kategori_produk;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_kategori_produk()
  	{
  		$this->_get_datatables_query_kategori_produk();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_filtered_kategori_produk()
  	{
  		$this->_get_datatables_query_kategori_produk();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function count_all_kategori_produk()
  	{
  		$this->db->from($this->table4);
  		return $this->db->count_all_results();
  	}

  	public function get_by_id_kategori_produk($id)
  	{
  		$this->db->from('category');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_kategori_produk($data)
  	{
  		$this->db->insert($this->table4, $data);
  		return $this->db->insert_id();
  	}

  	public function update_kategori_produk($where, $data)
  	{
  		$this->db->update($this->table4, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_kategori_produk($id)
  	{
  		$this->db->where('id', $id);
  		$this->db->delete($this->table4);
  	}

  	public function simpan_kategori_produk(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
  			'category' => $this->input->post('category')
  		);
  		$simpan = $this->db->insert('category', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Kategori Produk End //

  	// model Testimoni start //
  	public function get_testimoni_all()
  	{
  		$this->db->from($this->table5);
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_testimoni()
  	{
  		$this->db->from('testimoni');
  		$i = 0;
  		foreach ($this->column_search_testimoni as $item){
  			if ($_POST['search']['value']) {
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_testimoni) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_testimoni[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_testimoni)){
  			$order = $this->order_testimoni;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_testimoni()
  	{
  		$this->_get_datatables_query_testimoni();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_filtered_testimoni()
  	{
  		$this->_get_datatables_query_testimoni();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function count_all_testimoni()
  	{
  		$this->db->from($this->table5);
  		return $this->db->count_all_results();
  	}

  	public function get_by_id_testimoni($id)
  	{
  		$this->db->from('testimoni');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_testimoni($data)
  	{
  		$this->db->insert($this->table5, $data);
  		return $this->db->insert_id();
  	}

  	public function update_testimoni($where, $data)
  	{
  		$this->db->update($this->table5, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_testimoni($id)
  	{
  		$this->db->where('id', $id);
  		$this->db->delete($this->table5);
  	}

  	public function simpan_testimoni(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
  			'nama' => $this->input->post('nama'),
  			'alamat' => $this->input->post('alamat'),
  			'pesan' => $this->input->post('pesan')
  		);
  		$simpan = $this->db->insert('testimoni', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Testimoni End //

  	// model About Us start //
  	public function get_aboutus_all()
  	{
  		$this->db->from($this->table6);
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_aboutus()
  	{
  		$this->db->from('aboutus');
  		$i = 0;
  		foreach ($this->column_search_aboutus as $item){
  			if ($_POST['search']['value']) {
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_aboutus) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_aboutus[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_aboutus)){
  			$order = $this->order_aboutus;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_aboutus()
  	{
  		$this->_get_datatables_query_aboutus();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_filtered_aboutus()
  	{
  		$this->_get_datatables_query_aboutus();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function count_all_aboutus()
  	{
  		$this->db->from($this->table6);
  		return $this->db->count_all_results();
  	}

  	public function get_by_id_aboutus($id)
  	{
  		$this->db->from('aboutus');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_aboutus($data)
  	{
  		$this->db->insert($this->table6, $data);
  		return $this->db->insert_id();
  	}

  	public function update_aboutus($where, $data)
  	{
  		$this->db->update($this->table6, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_aboutus($id)
  	{
  		$this->db->where('id', $id);
  		$this->db->delete('aboutus');
  	}

  	public function simpan_aboutus(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
  			'judul' => $this->input->post('judul'),
  			'isi' => $this->input->post('isi'),
  			'visi' => $this->input->post('visi'),
  			'misi' => $this->input->post('misi'),
  			'misi2' => $this->input->post('misi2')
  		);
  		$simpan = $this->db->insert('aboutus', $simpan_data);
  		return $simpan;
  	}
  	// Model Data About Us End //

  	// Model Data Contact Us Start //
  	public function get_contactus_all(){
  		$this->db->from($this->table7);
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_contactus(){
  		$this->db->from($this->table7);
  		$i = 0;
  		foreach ($this->column_search_contactus as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_contactus) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_contactus[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_contactus)){
  			$order = $this->order_contactus;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_contactus(){
  		$this->_get_datatables_query_contactus();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_contactus()
	{
		$this->db->from('kontak');
		return $this->db->count_all_results();
	}

  	public function count_flitered_contactus(){
  		$this->_get_datatables_query_contactus();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_contactus($id){
  		$this->db->from('kontak');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_contactus($data){
  		$this->db->insert($this->table7, $data);
  		return $this->db->insert_id();
  	}

  	public function update_contactus($where, $data){
  		$this->db->update($this->table7, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_contactus($id){
  		$this->db->where('id', $id);
  		$this->db->delete('kontak');
  	}

  	public function simpan_contactus(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
  			'judul' => $this->input->post('judul'),
  			'telp' => $this->input->post('telp'),
  			'telp2' => $this->input->post('telp2'),
  			'situs' => $this->input->post('situs'),
  			'email' => $this->input->post('email'),
  			'alamat' => $this->input->post('alamat')
  		);
  		$simpan = $this->db->insert('kontak', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Contact Us End //

  	// Model Data How To Buy Start //
  	public function get_howtobuy_all(){
  		$this->db->from($this->table8);
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_howtobuy(){
  		$this->db->from($this->table8);
  		$i = 0;
  		foreach ($this->column_search_howtobuy as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_howtobuy) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_howtobuy[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_howtobuy)){
  			$order = $this->order_howtobuy;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_howtobuy(){
  		$this->_get_datatables_query_howtobuy();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_howtobuy()
	{
		$this->db->from('howtobuy');
		return $this->db->count_all_results();
	}

  	public function count_flitered_howtobuy(){
  		$this->_get_datatables_query_howtobuy();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_howtobuy($id){
  		$this->db->from('howtobuy');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_howtobuy($data){
  		$this->db->insert($this->table8, $data);
  		return $this->db->insert_id();
  	}

  	public function update_howtobuy($where, $data){
  		$this->db->update($this->table8, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_howtobuy($id){
  		$this->db->where('id', $id);
  		$this->db->delete('howtobuy');
  	}

  	public function simpan_howtobuy(){
  		$simpan_data = array(
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
  		$simpan = $this->db->insert('howtobuy', $simpan_data);
  		return $simpan;
  	}
  	// Model Data How To Buy End //

  	// Model Data How To Pay Start //
  	public function get_howtopay_all(){
  		$this->db->from('howtopay');
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_howtopay(){
  		$this->db->from($this->table9);
  		$i = 0;
  		foreach ($this->column_search_howtopay as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_howtopay) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_howtopay[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_howtopay)){
  			$order = $this->order_howtopay;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_howtopay(){
  		$this->_get_datatables_query_howtopay();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_howtopay()
	{
		$this->db->from('howtopay');
		return $this->db->count_all_results();
	}

  	public function count_flitered_howtopay(){
  		$this->_get_datatables_query_howtopay();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_howtopay($id){
  		$this->db->from('howtopay');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_howtopay($data){
  		$this->db->insert($this->table9, $data);
  		return $this->db->insert_id();
  	}

  	public function update_howtopay($where, $data){
  		$this->db->update($this->table9, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_howtopay($id){
  		$this->db->where('id', $id);
  		$this->db->delete('howtopay');
  	}

  	public function simpan_howtopay(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
  			'judul1' => $this->input->post('judul1'),
  			'isi1' => $this->input->post('isi1'),
  			'judul2' => $this->input->post('judul2'),
  			'isi2' => $this->input->post('isi2')
  						);
  		$simpan = $this->db->insert('howtopay', $simpan_data);
  		return $simpan;
  	}
  	// Model Data How To Pay End //

  	// Model Data No. Rek Start //
  	public function get_no_rek_all(){
  		$this->db->from('no_rek');
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_no_rek(){
  		$this->db->from($this->table10);
  		$i = 0;
  		foreach ($this->column_search_no_rek as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_no_rek) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_no_rek[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_no_rek)){
  			$order = $this->order_no_rek;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_no_rek(){
  		$this->_get_datatables_query_no_rek();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_no_rek()
	{
		$this->db->from('no_rek');
		return $this->db->count_all_results();
	}

  	public function count_flitered_no_rek(){
  		$this->_get_datatables_query_no_rek();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_no_rek($id){
  		$this->db->from('no_rek');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_no_rek($data){
  		$this->db->insert($this->table10, $data);
  		return $this->db->insert_id();
  	}

  	public function update_no_rek($where, $data){
  		$this->db->update($this->table10, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_no_rek($id){
  		$this->db->where('id', $id);
  		$this->db->delete('no_rek');
  	}

  	public function simpan_no_rek(){
  		$simpan_data = array(
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
  		$simpan = $this->db->insert('no_rek', $simpan_data);
  		return $simpan;
  	}
  	// Model Data No. Rek End //

  	// Model Data Ongkir Start //
  	public function get_ongkir_all(){
  		$this->db->from('ongkir');
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_ongkir(){
  		$this->db->from($this->table11);
  		$i = 0;
  		foreach ($this->column_search_ongkir as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_ongkir) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_ongkir[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_ongkir)){
  			$order = $this->order_ongkir;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_ongkir(){
  		$this->_get_datatables_query_ongkir();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_ongkir()
	{
		$this->db->from($this->table11);
		return $this->db->count_all_results();
	}

  	public function count_flitered_ongkir(){
  		$this->_get_datatables_query_ongkir();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_ongkir($id){
  		$this->db->from('ongkir');
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_ongkir($data){
  		$this->db->insert($this->table11, $data);
  		return $this->db->insert_id();
  	}

  	public function update_ongkir($where, $data){
  		$this->db->update($this->table11, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_ongkir($id){
  		$this->db->where('id', $id);
  		$this->db->delete('ongkir');
  	}

  	public function simpan_ongkir(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
			'jasa_pengiriman' => $this->input->post('jasa_pengiriman')
  		);
  		$simpan = $this->db->insert('ongkir', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Ongkir End //

  	// Model Data Wilayah Desa Start //
  	public function get_wilayah_desa_all(){
  		$this->db->from('wilayah_desa');
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_wilayah_desa(){
  		$this->db->from($this->table12);
  		$i = 0;
  		foreach ($this->column_search_wilayah_desa as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_wilayah_desa) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_wilayah_desa[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_wilayah_desa)){
  			$order = $this->order_wilayah_desa;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_wilayah_desa(){
  		$this->_get_datatables_query_wilayah_desa();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_wilayah_desa()
	{
		$this->db->from($this->table12);
		return $this->db->count_all_results();
	}

  	public function count_flitered_wilayah_desa(){
  		$this->_get_datatables_query_wilayah_desa();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_wilayah_desa($id){
  		$this->db->from($this->table12);
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_wilayah_desa($data){
  		$this->db->insert($this->table12, $data);
  		return $this->db->insert_id();
  	}

  	public function update_wilayah_desa($where, $data){
  		$this->db->update($this->table12, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_wilayah_desa($id){
  		$this->db->where('id', $id);
  		$this->db->delete('wilayah_desa');
  	}

  	public function simpan_wilayah_desa(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
			'kecamatan_id' => $this->input->post('kecamatan_id'),
			'nama' => $this->input->post('nama')
  		);
  		$simpan = $this->db->insert('wilayah_desa', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Wilayah Desa End //

  	// Model Data Wilayah Kabupaten Start //
  	public function get_wilayah_kabupaten_all(){
  		$this->db->from('wilayah_kabupaten');
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_wilayah_kabupaten(){
  		$this->db->from($this->table13);
  		$i = 0;
  		foreach ($this->column_search_wilayah_kabupaten as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_wilayah_kabupaten) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_wilayah_kabupaten[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_wilayah_kabupaten)){
  			$order = $this->order_wilayah_kabupaten;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_wilayah_kabupaten(){
  		$this->_get_datatables_query_wilayah_kabupaten();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_wilayah_kabupaten()
	{
		$this->db->from($this->table13);
		return $this->db->count_all_results();
	}

  	public function count_flitered_wilayah_kabupaten(){
  		$this->_get_datatables_query_wilayah_kabupaten();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_wilayah_kabupaten($id){
  		$this->db->from($this->table13);
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_wilayah_kabupaten($data){
  		$this->db->insert($this->table13, $data);
  		return $this->db->insert_id();
  	}

  	public function update_wilayah_kabupaten($where, $data){
  		$this->db->update($this->table13, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_wilayah_kabupaten($id){
  		$this->db->where('id', $id);
  		$this->db->delete('wilayah_kabupaten');
  	}

  	public function simpan_wilayah_kabupaten(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
			'provinsi_id' => $this->input->post('provinsi_id'),
			'nama' => $this->input->post('nama')
  		);
  		$simpan = $this->db->insert('wilayah_kabupaten', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Wilayah Kabupaten End //

  	// Model Data Wilayah Kecamatan Start //
  	public function get_wilayah_kecamatan_all(){
  		$this->db->from('wilayah_kecamatan');
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_wilayah_kecamatan(){
  		$this->db->from($this->table14);
  		$i = 0;
  		foreach ($this->column_search_wilayah_kecamatan as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_wilayah_kecamatan) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_wilayah_kecamatan[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_wilayah_kecamatan)){
  			$order = $this->order_wilayah_kecamatan;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_wilayah_kecamatan(){
  		$this->_get_datatables_query_wilayah_kecamatan();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_wilayah_kecamatan()
	{
		$this->db->from($this->table14);
		return $this->db->count_all_results();
	}

  	public function count_flitered_wilayah_kecamatan(){
  		$this->_get_datatables_query_wilayah_kecamatan();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_wilayah_kecamatan($id){
  		$this->db->from($this->table14);
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_wilayah_kecamatan($data){
  		$this->db->insert($this->table14, $data);
  		return $this->db->insert_id();
  	}

  	public function update_wilayah_kecamatan($where, $data){
  		$this->db->update($this->table14, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_wilayah_kecamatan($id){
  		$this->db->where('id', $id);
  		$this->db->delete('wilayah_kecamatan');
  	}

  	public function simpan_wilayah_kecamatan(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
			'kabupaten_id' => $this->input->post('kabupaten_id'),
			'nama' => $this->input->post('nama')
  		);
  		$simpan = $this->db->insert('wilayah_kecamatan', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Wilayah Kecamatan End //

  	// Model Data Wilayah Provinsi Start //
  	public function get_wilayah_provinsi_all(){
  		$this->db->from('wilayah_provinsi');
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_wilayah_provinsi(){
  		$this->db->from($this->table15);
  		$i = 0;
  		foreach ($this->column_search_wilayah_provinsi as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_wilayah_provinsi) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_wilayah_provinsi[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_wilayah_provinsi)){
  			$order = $this->order_wilayah_provinsi;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_wilayah_provinsi(){
  		$this->_get_datatables_query_wilayah_provinsi();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_wilayah_provinsi()
	{
		$this->db->from($this->table15);
		return $this->db->count_all_results();
	}

  	public function count_flitered_wilayah_provinsi(){
  		$this->_get_datatables_query_wilayah_provinsi();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_wilayah_provinsi($id){
  		$this->db->from($this->table15);
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_wilayah_provinsi($data){
  		$this->db->insert($this->table15, $data);
  		return $this->db->insert_id();
  	}

  	public function update_wilayah_provinsi($where, $data){
  		$this->db->update($this->table15, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_wilayah_provinsi($id){
  		$this->db->where('id', $id);
  		$this->db->delete('wilayah_provinsi');
  	}

  	public function simpan_wilayah_provinsi(){
  		$simpan_data = array(
  			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama')
  		);
  		$simpan = $this->db->insert('wilayah_provinsi', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Wilayah Provinsi End //

  	// Model Data Laporan Pembelian Start //
  	public function get_laporan_pembelian_all(){
  		$this->db->from($this->table16);
  		$this->db->where('id');
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function _get_datatables_query_laporan_pembelian(){
  		$this->db->from($this->table16);
  		$i = 0;
  		foreach ($this->column_search_laporan_pembelian as $item) {
  			if ($_POST['search']['value']){
  				if($i===0){
  					$this->db->group_start();
  					$this->db->like($item, $_POST['search']['value']);
  				}
  				else {
  					$this->db->or_like($item, $_POST['search']['value']);
  				}
  			if(count($this->column_search_laporan_pembelian) - 1 == $i)
  				$this->db->group_end();
  			}
  			$i++;
  		}
  		if(isset($_POST['order'])){
  			$this->db->order_by($this->column_order_laporan_pembelian[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
  		}
  		else if (isset($this->order_laporan_pembelian)){
  			$order = $this->order_laporan_pembelian;
  			$this->db->order_by(key($order), $order[key($order)]);
  		}
  	}

  	public function get_datatables_laporan_pembelian(){
  		$this->_get_datatables_query_laporan_pembelian();
  		if($_POST['length'] != -1){
  			$this->db->limit($_POST['length'], $_POST['start']);
  			$query = $this->db->get();
  			return $query->result();
  		}
  	}

  	public function count_all_laporan_pembelian()
	{
		$this->db->from($this->table16);
		return $this->db->count_all_results();
	}

  	public function count_flitered_laporan_pembelian(){
  		$this->_get_datatables_query_laporan_pembelian();
  		$query = $this->db->get();
  		return $query->num_rows();
  	}

  	public function get_by_id_laporan_pembelian($id){
  		$this->db->from($this->table16);
  		$this->db->where('id', $id);
  		$query = $this->db->get();
  		return $query->row();
  	}

  	public function save_laporan_pembelian($data){
  		$this->db->insert($this->table16, $data);
  		return $this->db->insert_id();
  	}

  	public function update_laporan_pembelian($where, $data){
  		$this->db->update($this->table16, $data, $where);
  		return $this->db->affected_rows();
  	}

  	public function delete_by_id_laporan_pembelian($id){
  		$this->db->where('id', $id);
  		$this->db->delete('lap_pembelian');
  	}

  	public function simpan_laporan_pembelian(){
  		$simpan_data = array(
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
  		$simpan = $this->db->insert('lap_pembelian', $simpan_data);
  		return $simpan;
  	}
  	// Model Data Laporan Pembelian End //

  	// Model Data Order Produk Start //
 	public function get_order_product_all(){
 		$this->db->from($this->table17);
 		$this->db->where('id');
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function _get_datatables_query_order_product(){
 		$this->db->from($this->table17);
 		$i = 0;

 		foreach ($this->column_search_order_product as $item){
 			if ($_POST['search']['value']){
 				if($i===0){
 				$this->db->group_start();
 				$this->db->like($item, $_POST['search']['value']);
 				}
 				else {
 				$this->db->or_like($item, $_POST['search']['value']);
 				}
 			if(count($this->column_search_order_product) - 1 == $i)
 				$this->db->group_end();
 			}
 			$i++;
 		}
 		if(isset($_POST['order'])){
 			$this->db->order_by($this->column_order_order_product[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
 		}
 		else if(isset($this->order_order_product)){
 			$order = $this->order_order_product;
 			$this->db->order_by(key($order), $order[key($order)]);
 		}
 	}

 	public function get_datatables_order_product(){
 		$this->_get_datatables_query_order_product();
 		if($_POST['length'] != -1){
 			$this->db->limit($_POST['length'], $_POST['start']);
 			$query = $this->db->get();
 			return $query->result();
 		}
 	}

 	public function count_all_order_product(){
 		$this->db->from($this->table17);
 		return $this->db->count_all_results();
 	}

 	public function count_flitered_order_product(){
 		$this->_get_datatables_query_order_product();
 		$query = $this->db->get();
 		return $query->num_rows();
 	}

 	public function get_by_id_order_product($id){
 		$this->db->from($this->table17);
 		$this->db->where('id', $id);
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function save_order_product($data){
 		$this->db->insert($this->table17, $data);
 		return $this->db->insert_id();
 	}

 	public function update_order_product($where, $data){
 		$this->db->update($this->table17, $data, $where);
 		return $this->db->affected_rows();
 	}

 	public function delete_by_id_order_product($id){
 		$this->db->where('id', $id);
 		$this->db->delete($this->table17);
 	}

 	public function simpan_order_product(){
 		$simpan_data = array(
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
 		$simpan = $this->db->insert($this->table17, $simpan_data);
 		return $simpan;
 	}
 	// Model Data Order Product End //

 	// Model Data Order Detail Start //
 	public function get_order_detail_all(){
 		$this->db->from($this->table18);
 		$this->db->where('id_order');
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function _get_datatables_query_order_detail(){
 		$this->db->from($this->table18);
 		$i = 0;

 		foreach ($this->column_search_order_detail as $item){
 			if ($_POST['search']['value']){
 				if($i===0){
 					$this->db->group_start();
 					$this->db->like($item, $_POST['search']['value']);
 				}
 				else {
 					$this->db->or_like($item, $_POST['search']['value']);
 				}
 			if(count($this->column_search_order_detail) - 1 == $i)
 				$this->db->group_end();
 			}
 			$i++;
 		}
 		if(isset($_POST['order'])){
 			$this->db->order_by($this->column_search_order_detail[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
 		}
 		else if(isset($this->order_order_detail)){
 			$order = $this->order_order_detail;
 			$this->db->order_by(key($order), $order[key($order)]);
 		}
 	}

 	public function get_datatables_order_detail(){
 		$this->_get_datatables_query_order_detail();
 		if($_POST['length'] != -1){
 			$this->db->limit($_POST['length'], $_POST['start']);
 			$query = $this->db->get();
 			return $query->result();
 		}
 	}

 	public function count_all_order_detail(){
 		$this->db->from($this->table18);
 		return $this->db->count_all_results();
 	}

 	public function count_flitered_order_detail(){
 		$this->_get_datatables_query_order_detail();
 		$query = $this->db->get();
 		return $query->num_rows();
 	}

 	public function get_by_id_order_detail($id){
 		$this->db->from($this->table18);
 		$this->db->where('id_order', $id);
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function save_order_detail($data){
 		$this->db->insert($this->table18, $data);
 		return $this->db->insert_id();
 	}

 	public function update_order_detail($where, $data){
 		$this->db->update($this->table18, $data, $where);
 		return $this->db->affected_rows();
 	}

 	public function delete_by_id_order_detail($id){
 	$this->db->where('id_order', $id);
 	$this->db->delete($this->table18);
 	}

 	public function simpan_order_detail(){
 		$simpan_data = array(
 			'id_order' => $this->input->post('id_order'),
 			'id_produk' => $this->input->post('id_produk'),
 			'jumlah' => $this->input->post('jumlah'),
 			'harga' => $this->input->post('harga')
 		);
 		$simpan = $this->db->insert($this->table18, $simpan_data);
 		return $simpan;
 	}
 	// Model Data Order Detail End //

 	// Model Data Orders Start //
 	public function get_orders_all(){
 		$this->db->from($this->table19);
 		$this->db->where('serial');
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function _get_datatables_query_orders(){
 		$this->db->from($this->table19);
 		$i = 0;
 		foreach($this->column_search_orders as $item){
 			if ($_POST['search']['value']){
 				if($i===0){
 					$this->db->group_start();
 					$this->db->like($item, $_POST['search']['value']);
 				}
 				else {
 					$this->db->or_like($item, $_POST['search']['value']);
 				}
 			if(count($this->column_search_orders) - 1 == $i)
				$this->db->group_end();
 			}
 			$i++;
 		}
 		if(isset($_POST['order'])){
 			$this->db->order_by($this->column_search_orders[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
 		}
 		else if(isset($this->order_orders)){
 			$order = $this->order_orders;
 			$this->db->order_by(key($order), $order[key($order)]);
 		}
 	}

 	public function get_datatables_orders(){
 		$this->_get_datatables_query_orders();
 		if($_POST['length'] != -1){
 			$this->db->limit($_POST['length'], $_POST['start']);
 			$query = $this->db->get();
 			return $query->result();
 		}
 	}

 	public function count_all_orders(){
 		$this->db->from($this->table19);
 		return $this->db->count_all_results();
 	}

 	public function count_flitered_orders(){
 		$this->_get_datatables_query_orders();
 		$query = $this->db->get();
 		return $query->num_rows();
 	}

 	public function get_by_id_orders($id){
 		$this->db->from($this->table19);
 		$this->db->where('serial', $id);
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function save_orders($data){
 		$this->db->insert($this->table19, $data);
 		return $this->db->insert_id();
 	}

 	public function update_orders($where, $data){
 		$this->db->update($this->table19, $data, $where);
 		return $this->db->affected_rows();
 	}

 	public function delete_by_id_orders($id){
 		$this->db->where('serial', $id);
 		$this->db->delete($this->table19);
 	}

 	public function simpan_orders(){
 		$simpan_data = array(
 			'serial' => $this->input->post('serial'),
 			'date' => $this->input->post('date'),
 			'customerid' => $this->input->post('customerid')
 		);
 		$simpan = $this->db->insert($this->table19, $simpan_data);
 		return $simpan;
 	}
 	// Model Data Orders End //

 	// Model Data Customer Start //
 	public function get_customers_all(){
 		$this->db->from($this->table20);
 		$this->db->where('serial');
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function _get_datatables_query_customers(){
 		$this->db->from($this->table20);
 		$i = 0;
 		foreach ($this->column_search_customers as $item){
 			if ($_POST['search']['value']){
 				if($i===0){
 					$this->db->group_start();
 					$this->db->like($item, $_POST['search']['value']);
 				}
 				else{
 					$this->db->or_like($item, $_POST['search']['value']);
 				}
 			if(count($this->column_search_customers) - 1 == $i)
 				$this->db->group_end();
 			}
 			$i++;
 		}
 		if(isset($_POST['order'])){
 			$this->db->order_by($this->column_search_customers[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
 		}
 		else if(isset($_POST['order'])){
 			$order = $this->order_customers;
 			$this->db->order_by(key($order), $order[key($order)]);
 		}
 	}

 	public function get_datatables_customers(){
 		$this->_get_datatables_query_customers();
 		if($_POST['length'] != -1){
 			$this->db->limit($_POST['length'], $_POST['start']);
 			$query = $this->db->get();
 			return $query->result();
 		}
 	}

 	public function count_all_customers(){
 		$this->db->from($this->table20);
 		return $this->db->count_all_results();
 	}

 	public function count_flitered_customers(){
 		$this->_get_datatables_query_customers();
 		$query = $this->db->get();
 		return $query->num_rows();
 	}

 	public function get_by_id_customers($id){
 		$this->db->from($this->table20);
 		$this->db->where('serial', $id);
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function save_customers($data){
 		$this->db->insert($this->table20, $data);
 		return $this->db->insert_id();
 	}

 	public function update_customer($where, $data){
 		$this->db->update($this->table20, $data, $where);
 		return $this->db->affected_rows();
 	}

 	public function delete_by_id_customers($id){
 		$this->db->where('serial', $id);
 		$this->db->delete($this->table20);
 	}

 	public function simpan_customers(){
 		$simpan_data = array(
 			'serial' => $this->input->post('serial'),
 			'nama' => $this->input->post('nama'),
 			'email' => $this->input->post('email'),
 			'alamat' => $this->input->post('alamat'),
 			'no_hp' => $this->input->post('no_hp')
 		);
 		$simpan = $this->db->insert($this->table20, $simpan_data);
 		return $simpan;
 	}
 	// Model Data Customers End //

 	// Model Get Data Laporan Pembelian Start //
 	public function get_laporan_pembelian_cetak(){
		$query = $this->db->query("SELECT * FROM lap_pembelian");
		if ($query->num_rows() > 0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	// Model Get Data Laporan Pembelian End //

	// Model Get Data Order Produk Start //
	public function get_order_produk_cetak(){
		$query = $this->db->query("SELECT * FROM order_product");
		if ($query->num_rows() > 0){
			foreach ($query->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	// Model Get Data Order Produk End //

	// Model Get Data Orders Start //
	public function get_orders_cetak(){
		$query = $this->db->query("SELECT * FROM orders");
		if ($query->num_rows() > 0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	// Model Get Data Orders End //

	// Model Get Data Order Detail Start //
	public function get_order_detail_cetak(){
		$query = $this->db->query("SELECT * FROM order_detail");
		if ($query->num_rows() > 0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	// Model Get Data Order Detail End //

	public function get_category(){
		$this->db->select('id_category, nama_kategori, id, category');
		$this->db->from('produk');
		$this->db->join('category', 'category.id = produk.id_category');
		$query = $this->db->get();
		return $query->result();
	}
}
  	
/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */
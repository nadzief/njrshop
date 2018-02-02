<?php defined('BASEPATH') or exit ('No Direct script access allowed');

class M_web extends CI_Model{

	public function get_produk_alat_musik(){
		$query = $this->db->query("SELECT * FROM produk WHERE id_category = 50 LIMIT 4");
		return $query->result();
	}

	public function get_produk_hp(){
		$query = $this->db->query("SELECT * FROM produk WHERE id_category = 51 LIMIT 4");
		return $query->result();
	}

	public function get_produk_komputer(){
		$query = $this->db->query("SELECT * FROM produk WHERE id_category = 52 LIMIT 4");
		return $query->result();
	}

	public function get_produk_laptop(){
		$query = $this->db->query("SELECT * FROM produk WHERE id_category = 53 LIMIT 4");
		return $query->result();
	}

	public function get_produk_sepatu(){
		$query = $this->db->query("SELECT * FROM produk WHERE id_category = 54 LIMIT 4");
		return $query->result();
	}

	public function get_produk_jersey(){
		$query = $this->db->query("SELECT * FROM produk WHERE id_category = 55 LIMIT 4");
		return $query->result();
	}

	public function get_kategori(){
		$query = $this->db->query("SELECT * FROM category WHERE id");
		return $query->result();
	}

	public function get_aboutus(){
		$query = $this->db->query("SELECT * FROM aboutus WHERE id");
		return $query->result();
	}

	public function get_kontak(){
		$query = $this->db->query("SELECT * FROM kontak WHERE id");
		return $query->result();
	}

	public function get_howtobuy(){
		$query = $this->db->query("SELECT * FROM howtobuy WHERE id");
		return $query->result();
	}

	public function get_howtopay(){
		$query = $this->db->query("SELECT * FROM howtopay WHERE id");
		return $query->result();
	}

	public function get_anggota(){
		$query = $this->db->query("SELECT * FROM anggota WHERE id_anggota");
		return $query->result();
	}

	public function get_no_rek(){
		$query = $this->db->query("SELECT * FROM no_rek");
		return $query->result();
	}

	public function get_all_produk(){
		$query = $this->db->query("SELECT * FROM produk WHERE id_produk");
		return $query->result();
	}

	public function get_by_id($id_produk){
		$this->db->from('produk_alatmusik');
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_cart(){
		if ($this->cart->total_items() < 1) { 
			echo "<script> swal ('Oops', 'Something went wrong!', 'error' );
            redirect('web/home','refresh')</script)";
        } 
	}

	public function getAll($config){  
        $hasilquery=$this->db->get('produk', $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }

    public function get_all_produk_hp($config_hp){
    	$hasilquery = $this->db->get('produk_hp', $config_hp['per_page'], $this->uri->segment(3));
    	if ($hasilquery->num_rows() > 0) {
    		foreach ($hasilquery->result() as $value) {
    			$data[] = $value;
    		}
    		return $data;
    	}
    } 

    public function get_all_produk_komputer($config_komputer){
    	$hasilquery = $this->db->get('produk_komputer', $config_komputer['per_page'], $this->uri->segment(3));
    	if ($hasilquery->num_rows() > 0) {
    		foreach ($hasilquery->result() as $value) {
    			$data[] = $value;
    		}
    		return $data;
    	}
    } 

    public function get_all_produk_laptop($config_laptop){
    	$hasilquery = $this->db->get('produk_laptop', $config_laptop['per_page'], $this->uri->segment(3));
    	if ($hasilquery->num_rows() > 0) {
    		foreach ($hasilquery->result() as $value) {
    			$data[] = $value;
    		}
    		return $data;
    	}
    } 

    public function get_all_produk_sepatu($config_sepatu){
    	$hasilquery = $this->db->get('produk_sepatu', $config_sepatu['per_page'], $this->uri->segment(3));
    	if ($hasilquery->num_rows() > 0) {
    		foreach ($hasilquery->result() as $value) {
    			$data[] = $value;
    		}
    		return $data;
    	}
    } 

    public function get_all_produk_jersey($config_jersey){
    	$hasilquery = $this->db->get('produk_jersey', $config_jersey['per_page'], $this->uri->segment(3));
    	if ($hasilquery->num_rows() > 0) {
    		foreach ($hasilquery->result() as $value) {
    			$data[] = $value;
    		}
    		return $data;
    	}
    } 

    public function get_produk(){
		$query = $this->db->query("SELECT * FROM produk_alatmusik WHERE id_produk");
		return $query->result();
	}

	public function get_max_id(){
		$query = $this->db->query("SELECT id FROM lap_pembelian ORDER BY id DESC");
		return $query->result();
	}

	public function get_produk_cart($table_name, $id){
		$this->db->where('id_produk', $id);
		$ambilData = $this->db->get($table_name);
		return $ambilData->row();
	}

	public function get_ongkir(){
		$query = $this->db->query("SELECT * FROM ongkir ORDER BY id");
		return $query->result();
	}

	public function getById($id) {
        return $this->db->get_where('anggota', array('id_anggota' => $id))->row();
    }

    public function get_testimoni(){
		$query = $this->db->query("SELECT * FROM testimoni");
		return $query->result();
	}

	public function get_produk_kategori($id){
		$query = $this->db->query("SELECT * FROM category INNER JOIN produk ON category.id = produk.id_category WHERE category.id = $id");
		return $query->result();
 	}

 	/* public function get_produk_kategori_hp($id){
		$query = $this->db->query("SELECT * FROM category INNER JOIN produk ON category.id = produk.id_category WHERE category.id = $id");
		return $query->result(); 
	}

	public function get_produk_kategori_komputer($id){
		$query = $this->db->query("SELECT * FROM category INNER JOIN produk ON category.id = produk.id_category WHERE category.id = $id");
		return $query->result(); 
	}

	public function get_produk_kategori_laptop($id){
		$query = $this->db->query("SELECT * FROM category INNER JOIN produk ON category.id = produk.id_category WHERE category.id = $id");
		return $query->result(); 
	}

	public function get_produk_kategori_sepatu($id){
		$query = $this->db->query("SELECT * FROM category INNER JOIN produk ON category.id = produk.id_category WHERE category.id = $id");
		return $query->result();
	}

	public function get_produk_kategori_jersey($id){
		$query = $this->db->query("SELECT * FROM category INNER JOIN produk ON category.id = produk.id_category WHERE category.id = $id");
		return $query->result();
	} */

	public function get_detail_produk($id){
		$this->db->from('produk');
		$this->db->where('id_produk', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
	}

	/* public function get_detail_produk_hp($id){
		$this->db->from('produk_hp');
		$this->db->where('id_produk', $id);
		$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->result();
			}
	}

	public function get_detail_produk_komputer($id){
		$this->db->from('produk_komputer');
		$this->db->where('id_produk', $id);
		$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->result();
			}
	}

	public function get_detail_produk_laptop($id){
		$this->db->from('produk_laptop');
		$this->db->where('id_produk', $id);
		$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->result();
			}
	}

	public function get_detail_produk_sepatu($id){
		$this->db->from('produk_sepatu');
		$this->db->where('id_produk', $id);
		$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->result();
		}
	}

	public function get_detail_produk_jersey($id){
		$this->db->from('produk_jersey');
		$this->db->where('id_produk', $id);
		$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->result();
			}
	} */

	public function get_detail_anggota($id){
		$this->db->from('anggota');
		$this->db->where('id_anggota', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
	}

	public function get_lap_pembelian($id){
		$this->db->from('lap_pembelian');
		$this->db->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result_array();
		}
	}

	public function get_kat_produk($id){
		$this->db->from('category');
		$this->db->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
	}

   	public function update_data($id, $data) {
    	$data = array(
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
    	$this->db->where('id_anggota', $id);
    	$this->db->update('anggota', $data);
    }

    public function get_by_id_profil($id){
    	$this->db->from('anggota');
    	$this->db->where('id_anggota', $id);
    	$query = $this->db->get();
    	return $query->row();
    }

    public function profil_update($data, $params){
    	$this->db->update('anggota', $data, $params);
    	return $this->db->affected_rows();
    }

	public function insert_testimoni($data){
		$this->db->insert('testimoni',$data);
	}

	public function insert_check_out($data){
		$this->db->insert('lap_pembelian', $data);
	}

	public function insert_customer($data){
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function insert_order($data){
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function insert_order_detail($data){
		$this->db->insert('order_detail', $data);
	}

	public function create_id(){
		$this->db->select('RIGHT(lap_pembelian.id,2) as kode', FALSE);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('lap_pembelian');
			if($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode) + 1;
			}
			else {
				$kode = 1;
			}
		$kodemax = str_pad($kode,2,"0",STR_PAD_LEFT);
		$kodejadi = $kodemax;
		return $kodejadi;
	}

	public function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('order_detail');
	}

	public function delete(){
    	$this->db->where(array('id_produk' => $id));
    	return $this->db->delete('order_detail');
	}

	public function selesai(){
		$cart = $this->cart->contents();
		foreach ($cart as $items){
		 	for ($i = 1; $i < count($items); $i++) {
				$query = $this->db->query("UPDATE produk SET produk.stok = produk.stok - {$items[$i]['qty']} WHERE produk.id_produk = {$items[$i]['id']} "); 
		 		return $query;
		 	}
		}
	}
}
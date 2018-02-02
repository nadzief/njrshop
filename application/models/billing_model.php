<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing_model extends CI_Model {

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
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */
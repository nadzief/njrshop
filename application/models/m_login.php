<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function getlogin($username,$password){
        if($username !='' && $password !=''){
            $pass = $password;
            $this->db->where("status",'0');
            $this->db->where("username",$username);
            $this->db->where("password",$pass);
            $query = $this->db->get("anggota");
            if($query->num_rows() > 0){
                foreach($query->result() as $row){
                    $user = array(
                        'username' => $row->username,
                        'nama_lengkap' => $row->nama_lengkap,
                        'foto' => $row->foto,
                        'no_hp' => $row->no_hp,
                        'email' => $row->email,
                        'id_anggota' => $row->id_anggota
                    );
                    $this->session->set_userdata($user);
                    redirect('web/home');
                }
            }
        }
        else {
    	   echo "<script> alert('Username atau Password Salah!!') </script>";
            redirect('web','refresh');
        }
    }

    public function getlogin_admin($username,$password){
        if($username !='' && $password !=''){
            $pass = $password;
            $this->db->where("level",'1');
            $this->db->where("username",$username);
            $this->db->where("password",$pass);
            $query = $this->db->get("admin");
                if($query->num_rows() > 0){
                    foreach($query->result() as $row){
                    $user = array(
                        'username' => $row->username,
                        'password' => $row->password
                    );
                    $this->session->set_userdata($user);
                    redirect('admin/dashboard');
                    }
                }
                else{
                    echo "<script> alert('Username atau Password Salah!!') </script>";
                    redirect('admin','refresh');
                }
        }
    }
}

?>
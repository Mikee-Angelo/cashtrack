<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authmodel extends CI_Model{

    public function authregister($data){
        $this->db->where('username', $data['username']);
        $a = $this->db->get('users')->num_rows();

        if($a == 0){
            $q = $this->db->insert('users', $data);

            if($q == true){
                return true;
            }else{
                return false;
            }

        }else{
            return 1;
        }
    }

    public function authlogin($data){
        $this->db->where($data);
        $a = $this->db->get('users');
        $b = $a->num_rows();

        if($b == 1){
            $row = $a->row();

            if(isset($row)){
                $datas  = ['user_id' => $row->user_id, 'name' => $row->name, 'username' => $row->username];

                return $datas;
            }
        }else{
            return false;
        }
    }
}
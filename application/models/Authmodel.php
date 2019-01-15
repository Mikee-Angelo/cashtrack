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

                if($row->status == 0){
                    $di = $this->db->get('def_inc_cat');

                    foreach($di->result_array() as $r){
                        $di_data = ['ic_user_id' => $row->user_id, 'ic_name' => $r['def_inc_name'], 'ic_icon' => $r['def_inc_logo']];    
                        $this->db->insert('income_cat', $di_data);        
                    }   
                }

                $this->db->where('user_id', $row->user_id);
                $this->db->update('users', ['status' => 1]);

                return $datas;
            }
        }else{
            return false;
        }
    }

// INCOME

    public function showIncCat($id){
        $this->db->where('ic_user_id', $id);
        $a = $this->db->get('income_cat');
        $data = [];

        foreach($a->result_array() as $row){
            $data[] = [$row['ic_id'], $row['ic_name'], $row['ic_icon']];
        }

        return $data;
        var_dump($data);
    }

    public function addIncomeData($data){
        $a = $this->db->insert('trans_income', $data);
        
        if($a){
           return true; 
        }else {
            return false;
        }
    }
}
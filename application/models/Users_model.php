<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

    public function __construct(){

        parent::__construct();

        $this->load->database();

    }

    public function get($id=0){

        if($id==0){

            return $this->db->get('users')->result();

        }else{

            return $this->db->get_where('users', array('id' => $id))->row();

        }

    }

    public function get_by_username($username){

        return $this->db->get_where('users', array('user_name' => $username))->row();

    }

    public function insert_user($data){

        $this->db->insert('users', $data);

        return $this->db->insert_id();

    }

    public function update_user($id, $data){

        $this->db->where('id', $id);

        return $this->db->update('users', $data)?true:false;

    }

    public function delete_user($id){

        $this->db->where('id', $id);

        return  $this->db->delete('users') ? true : false;

    }

}
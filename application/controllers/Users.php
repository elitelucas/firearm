<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){

        parent::__construct();        

		$this->load->model('Users_model');

	}
	
	public function index(){

		$data['page_title'] = 'Users';
		
		$data['view'] = $this->load->view('users/users');

		$data['view_js'] = 'users/user_js';

		$data['before_body'] = '<script>users_table();</script>';

		$this->load->view('index', $data);

	}

	public function users_table($id=0){

		$users = $this->Users_model->get();

		if($id==0){

			$data['id'] = $users[0]->id;

		}else{

			$data['id'] = $id;

		}
		
		$data['users'] = $users;

		return $this->load->view('users/users_table', $data);

	}

	public function user_modal($id){

		if($id!=0){

			$data['user'] = $this->Users_model->get($id);

		}

		return $this->load->view('users/user_modal', $data);

	}

	public function user_detail($id){

		$data['user'] = $this->Users_model->get($id);

		return $this->load->view('users/user_detail', $data);


	}

	public function check_user($username){

		$user = $this->Users_model->get_by_username($username);

		if(!empty($user)){

			echo 1;

		}else{

			echo 0;

		}

	}

	public function save_user($id){

		if($id == 0){

			$insert_data = array(

				"first_name" => $this->input->post('first_name'),

				"last_name" => $this->input->post('last_name'),

				"user_name" => $this->input->post('user_name')

			);

			$id = $this->Users_model->insert_user($insert_data);

		}else{

			$update_data = array(

				"first_name" => $this->input->post('first_name'),

				"last_name" => $this->input->post('last_name'),

				"user_name" => $this->input->post('user_name')

			);

			$this->Users_model->update_user($id, $update_data);

		}

		$this->users_table($id);
		
	}

	public function personal_data($id){

		$update_data = array(

			"gender" => $this->input->post('gender'),

			"language" => $this->input->post('language'),

			"dob" => $this->input->post('dob')

		);

		$this->Users_model->update_user($id, $update_data);

		$this->user_detail($id);
		
	}

	public function contact_data($id){

		if($this->input->post('allow_email') == 'true'){

			$allow_email = 1;

		}else{

			$allow_email = 0;

		}

		if($this->input->post('allow_phone') == 'true'){

			$allow_phone = 1;

		}else{

			$allow_phone = 0;

		}

		$update_data = array(

			"email" => $this->input->post('email'),

			"phone" => $this->input->post('phone'),

			"allow_email" => $allow_email,

			"allow_phone" => $allow_phone,

		);

		$this->Users_model->update_user($id, $update_data);

		$this->user_detail($id);
		
	}

	public function delete_user($id){

		$this->Users_model->delete_user($id);

		$this->users_table();

	}

}

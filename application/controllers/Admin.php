<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
	}
	public function index()
	{
		if ($this->isUserLoggedIn) {
			redirect('/login');
		}

		$this->load->view('admin/index');
	}


	public function studentdata()
	{
		if ($this->isUserLoggedIn) {
			redirect('/login');
		}
		$data['studentinfo'] = $this->Mrv_Model->fetchinfo('mrvform');
		$this->load->view('admin/studentdata', $data);
	}


	public function editformdata($id)
	{
		if ($this->isUserLoggedIn) {
			redirect('/login');
		}

		$data['editform'] = $this->Mrv_Model->fetchdata($id, 'mrvform');
		$this->load->view('admin/viewform', $data);
	}
	public function editform($id)
	{
		if ($this->isUserLoggedIn) {
			redirect('/login');
		}

		$data['editformdata'] = $this->Mrv_Model->fetchdata($id, 'mrvform');
		$this->load->view('admin/updateformdata', $data);
	}
	public function updateform()
	{
		$id = $this->input->post('id');
		if (!empty($_FILES['user_image']['name'])) {

			$path_parts = pathinfo($_FILES['user_image']['name']);
			$image_path = $path_parts['filename'] . '_' . time() . '.' . $path_parts['extension'];
			$imgname = $image_path;

			$source =  $_FILES['user_image']['tmp_name'];
			$originalpath  = "webupload/" . $imgname;
			$data['file'] = $imgname;

			move_uploaded_file($source, $originalpath);
		}
		date_default_timezone_set('Asia/Kolkata');
		$data['updated_at'] = date('d-m-Y H:i A');

		$data['name']     = $this->input->post('name');
		$data['class']     = $this->input->post('class');
		$data['address']     = $this->input->post('address');
		$data['dob']  = $this->input->post('dob');
		$data['dobwords']  = $this->input->post('dobwords');
		$data['age']  = $this->input->post('age');
		$data['gender']  = $this->input->post('gender');
		$data['caste']  = $this->input->post('caste');
		$data['annual_income']  = $this->input->post('annual_income');
		$data['class_sought']  = $this->input->post('class_sought');
		$data['fathername']  = $this->input->post('fathername');
		$data['father_occupation']  = $this->input->post('father_occupation');
		$data['father_occupation_description']  = $this->input->post('father_occupation_description');
		$data['father_email'] = $this->input->post('father_email');
		$data['mothername']  = $this->input->post('mothername');
		$data['mother_occupation']  = $this->input->post('mother_occupation');
		$data['mother_occupation_description']  = $this->input->post('mother_occupation_description');
		$data['mother_email'] = $this->input->post('mother_email');
		$data['telno']  = $this->input->post('telno');
		$data['transport']  = $this->input->post('transport');
		$data['medical_info']  = $this->input->post('medical_info');
		$data['medical_problem']  = $this->input->post('medical_problem');
		$data['terms']  = $this->input->post('terms');
		$data['transaction_id']  = $this->input->post('transaction_id');


		$siblingname  = $this->input->post('siblingname');
		$siblingclass  = $this->input->post('siblingclass');
		$siblingsection  = $this->input->post('siblingsection');
		$siblingadmnno  = $this->input->post('siblingadmnno');

		$sibling = array();

		for ($i = 0; $i < count($siblingname); $i++) {
			array_push(
				$sibling,
				array('name' => $siblingname[$i]),
				array('class' => $siblingclass[$i]),
				array('section' => $siblingsection[$i]),
				array('admno' => $siblingadmnno[$i])
			);
		}

		$data['siblings'] = json_encode($sibling);


		//$insertUser = $this->Mrv_Model->updatedata($id, $data);
		$insertUser = $this->db->where('id', $id);
		$insertUser = $this->db->update('mrvform', $data);

		if ($insertUser) {
			echo json_encode(['done' => '1']);
		} else {
			echo json_encode(['done' => '0']);
		}
	}

	public function login()
	{
		$login = array(

			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')

		);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true) {
			$email = $this->input->post('email');
			$users = $this->Mrv_Model->checkUser($email);

			if (!empty($users)) {
				$password = $this->input->post('password');
				if ($password == $users['password']) {
					$sessArray['id'] = $users['id'];
					$sessArray['name'] = $users['name'];

					$sessArray['email'] = $users['email'];
					$sessArray['password'] = $users['password'];

					$this->session->set_userdata($sessArray);

					redirect('admin/index');
				} else {
					$this->session->set_flashdata('msg', 'Either email or password in incorrect,please try again.');
					redirect('/login');
				}
			} else {
				$this->session->set_flashdata('msg', 'Either email or password in incorrect,please try again.');
				redirect('/login');
			}
		} else {
			$this->load->view('admin/login');
		}
	}



	public function logout()
	{
		//removing session  

		$this->session->sess_destroy('isUserLoggedIn');
		redirect("admin/login");
	}

	public function selectedclass()
	{
		$class = $this->input->post('str');
		$data['studentinfo'] = $this->Mrv_Model->fetchclass($class, 'mrvform');
		$this->load->view('admin/std_filter', $data);
	}
	function search()
	{
		$q = $this->input->post('str');
		// print_r($q);
		// exit;
		$data['studentinfo'] = $this->Mrv_Model->fetch_data($q, 'mrvform');
		
		$this->load->view('admin/std_filter', $data);
	}
}

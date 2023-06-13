<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('form');
	}
	public function input_data()
	{


		if (!empty($_FILES['user_image']['name'])) {
			// echo $_FILES['image']['name'];
			$path_parts = pathinfo($_FILES['user_image']['name']);
			$image_path = $path_parts['filename'] . '_' . time() . '.' . $path_parts['extension'];
			$imgname = $image_path;

			$source =  $_FILES['user_image']['tmp_name'];
			$originalpath  = "webupload/" . $imgname;

			move_uploaded_file($source, $originalpath);
		}
		$this->db->select('MAX(id) as id');
		$this->db->from('mrvform');
		$query = $this->db->get();
		$result = $query->result_array();
		$serialno = "MRV" . str_pad($result[0]['id'] + 1, 5, "0", STR_PAD_LEFT);
		$data = array(
			'serial_no' => $serialno,
			'file' => $imgname,
			'name' => $this->input->post('name'),
			'class' => $this->input->post('class'),
			'address' => $this->input->post('address'),
			'dob' => $this->input->post('dob'),
			'dobwords' => $this->input->post('dobwords'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'caste' => $this->input->post('caste'),
			'annual_income' => $this->input->post('annual_income'),
			'class_sought' => $this->input->post('class_sought'),
			'fathername' => $this->input->post('fathername'),
			'father_occupation' => $this->input->post('father_occupation'),
			'father_occupation_description' => $this->input->post('father_occupation_description'),
			'father_email' => $this->input->post('father_email'),
			'mothername' => $this->input->post('mothername'),
			'mother_occupation' => $this->input->post('mother_occupation'),
			'mother_occupation_description' => $this->input->post('mother_occupation_description'),
			'mother_email' => $this->input->post('mother_email'),
			'telno' => $this->input->post('telno'),
			'transport'  => $this->input->post('transport'),
			'medical_info'  => $this->input->post('medical_info') ?? '0',
			'medical_problem'  => $this->input->post('medical_problem'),
			'terms'  => $this->input->post('terms'),
			'transaction_id'  => $this->input->post('transaction_id'),
		);

		$siblingname  = $this->input->post('siblingname');
		$siblingclass  = $this->input->post('siblingclass');
		$siblingsection  = $this->input->post('siblingsection');
		$siblingadmnno  = $this->input->post('siblingadmnno');

		$sibiling = array();
		for ($i = 0; $i < count($siblingname); $i++) {
			array_push(
				$sibiling,
				array('name' => $siblingname[$i]),
				array('class' => $siblingclass[$i]),
				array('section' => $siblingsection[$i]),
				array('admno' => $siblingadmnno[$i])
			);
		}

		$data['siblings'] = json_encode($sibiling);

		$insertUser = $this->db->insert('mrvform', $data);
		if ($insertUser) {
			echo json_encode(['done' => '1']);
		} else {
			echo json_encode(['done' => '0']);
		}
	}


	public function showdobwords()
	{
		$birth_date = $this->input->post('str');

		$new_birth_date = explode('-', $birth_date);
		$year = $new_birth_date[0];
		$month = $new_birth_date[1];
		$day  = $new_birth_date[2];
		$birth_day = $this->numberTowords($day);
		$birth_year = $this->numberTowords($year);
		$monthNum = $month;
		$dateObj   = DateTime::createFromFormat('!m', $monthNum);
		$monthName = $dateObj->format('F');
		echo $dobwords = $birth_day . " " . strtoupper($monthName) . " " . $birth_year;
	}



	function numberTowords($num)
	{
		$ones = array(
			0 => "ZERO",
			1 => "ONE",
			2 => "TWO",
			3 => "THREE",
			4 => "FOUR",
			5 => "FIVE",
			6 => "SIX",
			7 => "SEVEN",
			8 => "EIGHT",
			9 => "NINE",
			10 => "TEN",
			11 => "ELEVEN",
			12 => "TWELVE",
			13 => "THIRTEEN",
			14 => "FOURTEEN",
			15 => "FIFTEEN",
			16 => "SIXTEEN",
			17 => "SEVENTEEN",
			18 => "EIGHTEEN",
			19 => "NINETEEN",
			"014" => "FOURTEEN"
		);
		$tens = array(
			0 => "ZERO",
			1 => "TEN",
			2 => "TWENTY",
			3 => "THIRTY",
			4 => "FORTY",
			5 => "FIFTY",
			6 => "SIXTY",
			7 => "SEVENTY",
			8 => "EIGHTY",
			9 => "NINETY"
		);
		$hundreds = array(
			"HUNDRED",
			"THOUSAND",
			"MILLION",
			"BILLION",
			"TRILLION",
			"QUARDRILLION"
		); /* limit t quadrillion */

		$num = number_format($num, 2, ".", ",");
		$num_arr = explode(".", $num);
		$wholenum = $num_arr[0];
		$decnum = $num_arr[1];
		$whole_arr = array_reverse(explode(",", $wholenum));
		krsort($whole_arr, 1);
		$rettxt = "";
		foreach ($whole_arr as $key => $i) {

			while (substr($i, 0, 1) == "0")
				$i = substr($i, 1, 5);
			if ($i < 20) {
				$rettxt .= $ones[$i];
			} elseif ($i < 100) {
				if (substr($i, 0, 1) != "0")  $rettxt .= $tens[substr($i, 0, 1)];
				if (substr($i, 1, 1) != "0") $rettxt .= " " . $ones[substr($i, 1, 1)];
			} else {
				if (substr($i, 0, 1) != "0") $rettxt .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
				if (substr($i, 1, 1) != "0") $rettxt .= " " . $tens[substr($i, 1, 1)];
				if (substr($i, 2, 1) != "0") $rettxt .= " " . $ones[substr($i, 2, 1)];
			}
			if ($key > 0) {
				$rettxt .= " " . $hundreds[$key] . " ";
			}
		}
		if ($decnum > 0) {
			$rettxt .= " and ";
			if ($decnum < 20) {
				$rettxt .= $ones[$decnum];
			} elseif ($decnum < 100) {
				$rettxt .= $tens[substr($decnum, 0, 1)];
				$rettxt .= " " . $ones[substr($decnum, 1, 1)];
			}
		}
		return $rettxt;
	}


	public function showage()
	{
		$birth_date = $_POST['str'];
		$new_birth_date = explode('-', $birth_date);
		$year = $new_birth_date[0];
		$month = $new_birth_date[1];
		$day  = $new_birth_date[2];

		if ($month <= 3) {
			$new_year = 2023 - $year;
			$new_day = 31 - $day;
			$new_month = 3 - $month;
		} else {
			$new_month = 15 - $month;
			$new_year = 2022 - $year;
			$new_day = 31 - $day;
		}

		echo $new_year . " Years " . $new_month . " Months " . $new_day . " Days";
	}
}

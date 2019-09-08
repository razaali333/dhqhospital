<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class other extends CI_Controller
 {
 	
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //Xray//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function xray()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_xray();
 		$data['recept']=$this->mdl_other->fetch_xray_recept();
 		$this->load->view('xray_entry',$data);
 	}

 	public function insert_xray()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));

		$this->mdl_other->delete_xray($receptNumber[1]);


		foreach ($this->input->post('sub_departement') as $key => $value) {
			$dept=$this->mdl_other->fetch_dept_name($value);
			$price=$this->mdl_other->fetch_dept_price($value);

			$data = array('receptNumber' =>$receptNumber[1],
	 					  'departement' => 'Xray',
	 					  'cat_id' => $value,
						  'cat_name' => $dept,		
						  'patient_name' => $this->input->post('name'),	
						  'age' => $this->input->post('age'),	
						  'gander' => $this->input->post('gander'),		
						  'shift' => $this->input->post('shift'),		
						  'address' => $this->input->post('address'),	
						  'type' => $this->input->post('type'),	
						  'date' => date('Y-m-d h:i'),	
						  'price' => $price,	
						);
			$query=$this->mdl_other->insert_xray($data);
		}
		


 		$film = array('receptNumber' =>$receptNumber[1],
 					  'films' => $this->input->post('film'),
 					  'date' => date('Y-m-d h:i')
					);

		$this->session->set_userdata('xray_receptNumber',$receptNumber[1]);
		$films=$this->mdl_other->insert_film($film);
 	}


 	public function print_xray()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('xray_receptNumber');
		$data['query']=$this->mdl_other->get_xray_invoice_by_id($id);
		$this->load->view('xray_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //LAB//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function lab()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_lab();
 		$data['recept']=$this->mdl_other->fetch_lab_recept();
 		$this->load->view('lab_entry',$data);
 	}

 	public function insert_lab()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));

		$this->mdl_other->delete_lab($receptNumber[1]);

		
		foreach ($this->input->post('sub_departement') as $key => $value) {
			$dept=$this->mdl_other->fetch_dept_name($value);
			$price=$this->mdl_other->fetch_dept_price($value);

			$data = array('receptNumber' =>$receptNumber[1],
	 					  'departement' => 'Laboratory',
	 					  'cat_id' => $value,
						  'cat_name' => $dept,		
						  'patient_name' => $this->input->post('name'),	
						  'age' => $this->input->post('age'),	
						  'gander' => $this->input->post('gander'),		
						  'shift' => $this->input->post('shift'),		
						  'address' => $this->input->post('address'),	
						  'type' => $this->input->post('type'),	
						  'date' => date('Y-m-d h:i'),	
						  'price' => $price,	
						);
			$query=$this->mdl_other->insert_lab($data);
		}
		$this->session->set_userdata('lab_receptNumber',$receptNumber[1]);
 	}


 	public function print_lab()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('lab_receptNumber');
		$data['query']=$this->mdl_other->get_lab_invoice_by_id($id);
		$this->load->view('lab_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //Ultrasound//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function ultrasound()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_ultrasound();
 		$data['recept']=$this->mdl_other->fetch_ultrasound_recept();
 		$this->load->view('ultrasound_entry',$data);
 	}

 	public function insert_ultrasound()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'Ultrasound',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$ultrasound_receptNumber=$receptNumber[1];
		$this->session->set_userdata('ultrasound_receptNumber',$ultrasound_receptNumber);
		$query=$this->mdl_other->insert_ultrasound($data);
 	}


 	public function print_ultrasound()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('ultrasound_receptNumber');
		$data['query']=$this->mdl_other->get_ultrasound_invoice_by_id($id);
		$this->load->view('ultrasound_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //ECG//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function ecg()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_ecg();
 		$data['recept']=$this->mdl_other->fetch_ecg_recept();
 		$this->load->view('ecg_entry',$data);
 	}

 	public function insert_ecg()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'ECG',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$ecg_receptNumber=$receptNumber[1];
		$this->session->set_userdata('ecg_receptNumber',$ecg_receptNumber);
		$query=$this->mdl_other->insert_ecg($data);
 	}


 	public function print_ecg()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('ecg_receptNumber');
		$data['query']=$this->mdl_other->get_ecg_invoice_by_id($id);
		$this->load->view('ecg_print',$data);
 	}

////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //ECHO//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function echos()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_echo();
 		$data['recept']=$this->mdl_other->fetch_echo_recept();
 		$this->load->view('echo_entry',$data);
 	}

 	public function insert_echo()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'ECHO',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$echo_receptNumber=$receptNumber[1];
		$this->session->set_userdata('echo_receptNumber',$echo_receptNumber);
		$query=$this->mdl_other->insert_echo($data);
 	}


 	public function print_echo()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('echo_receptNumber');
		$data['query']=$this->mdl_other->get_echo_invoice_by_id($id);
		$this->load->view('echo_print',$data);
 	}

////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //OT//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function ot_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_ot();
 		$data['recept']=$this->mdl_other->fetch_ot_recept();
 		$this->load->view('ot_entry',$data);
 	}

 	public function insert_ot()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'OT',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$ot_receptNumber=$receptNumber[1];
		$this->session->set_userdata('ot_receptNumber',$ot_receptNumber);
		$query=$this->mdl_other->insert_ot($data);
 	}


 	public function print_ot()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('ot_receptNumber');
		$data['query']=$this->mdl_other->get_ot_invoice_by_id($id);
		$this->load->view('ot_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //WARD//
////////////////////////////////////////////////////////////////////////////////////////////////////////////

 	public function ward_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_ward();
 		$data['recept']=$this->mdl_other->fetch_ward_recept();
 		$this->load->view('ward_entry',$data);
 	}

 	public function insert_ward()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'Ward',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$ward_receptNumber=$receptNumber[1];
		$this->session->set_userdata('ward_receptNumber',$ward_receptNumber);
		$query=$this->mdl_other->insert_ward($data);
 	}


 	public function print_ward()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('ward_receptNumber');
		$data['query']=$this->mdl_other->get_ward_invoice_by_id($id);
		$this->load->view('ward_print',$data);
 	}

////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //LABOUR ROOM//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function lroom_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_lroom();
 		$data['recept']=$this->mdl_other->fetch_lroom_recept();
 		$this->load->view('lroom_entry',$data);
 	}

 	public function insert_lroom()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'L-Room',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$lroom_receptNumber=$receptNumber[1];
		$this->session->set_userdata('lroom_receptNumber',$lroom_receptNumber);
		$query=$this->mdl_other->insert_ward($data);
 	}


 	public function print_lroom()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('lroom_receptNumber');
		$data['query']=$this->mdl_other->get_lroom_invoice_by_id($id);
		$this->load->view('lroom_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //CT SCAN//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function ctscan_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_ctscan();
 		$data['recept']=$this->mdl_other->fetch_ctscan_recept();
 		$this->load->view('ctscan_entry',$data);
 	}

 	public function insert_ctscan()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'CT Scan',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$ctscan_receptNumber=$receptNumber[1];
		$this->session->set_userdata('ctscan_receptNumber',$ctscan_receptNumber);
		$query=$this->mdl_other->insert_ctscan($data);
 	}


 	public function print_ctscan()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('ctscan_receptNumber');
		$data['query']=$this->mdl_other->get_ctscan_invoice_by_id($id);
		$this->load->view('ctscan_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //DENTAL//
////////////////////////////////////////////////////////////////////////////////////////////////////////////

 	public function dental_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_dental();
 		$data['recept']=$this->mdl_other->fetch_dental_recept();
 		$this->load->view('dental_entry',$data);
 	}

 	public function insert_dental()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'Dental',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$dental_receptNumber=$receptNumber[1];
		$this->session->set_userdata('dental_receptNumber',$dental_receptNumber);
		$query=$this->mdl_other->insert_dental($data);
 	}


 	public function print_dental()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('dental_receptNumber');
		$data['query']=$this->mdl_other->get_dental_invoice_by_id($id);
		$this->load->view('dental_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //AMBULANCE//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function ambulance_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_ambulance();
 		$data['recept']=$this->mdl_other->fetch_ambulance_recept();
 		$this->load->view('ambulance_entry',$data);
 	}

 	public function insert_ambulance()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'Ambulance',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$ambulance_receptNumber=$receptNumber[1];
		$this->session->set_userdata('ambulance_receptNumber',$ambulance_receptNumber);
		$query=$this->mdl_other->insert_ambulance($data);
 	}


 	public function print_ambulance()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('ambulance_receptNumber');
		$data['query']=$this->mdl_other->get_ambulance_invoice_by_id($id);
		$this->load->view('ambulance_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //Physiotherapy//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
 	public function physiotherapy_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_physiotherapy();
 		$data['recept']=$this->mdl_other->fetch_physiotherapy_recept();
 		$this->load->view('physiotherapy_entry',$data);
 	}

 	public function insert_physiotherapy()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'Physiotherapy',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$physiotherapy_receptNumber=$receptNumber[1];
		$this->session->set_userdata('physiotherapy_receptNumber',$physiotherapy_receptNumber);
		$query=$this->mdl_other->insert_physiotherapy($data);
 	}


 	public function print_physiotherapy()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('physiotherapy_receptNumber');
		$data['query']=$this->mdl_other->get_physiotherapy_invoice_by_id($id);
		$this->load->view('physiotherapy_print',$data);
 	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //MEDICAL CERTIFICATE//
////////////////////////////////////////////////////////////////////////////////////////////////////////////

 	public function certificate_entry()
 	{
 		$this->load->model('mdl_other');

 		$data['query']=$this->mdl_other->fetch_certificate();
 		$data['recept']=$this->mdl_other->fetch_certificate_recept();
 		$this->load->view('medical_certificate_entry',$data);
 	}

 	public function insert_certificate()
 	{
 		date_default_timezone_set('Asia/Karachi');
 		$this->load->model('mdl_other');	
		$receptNumber=explode('-',$this->input->post('receptNumber'));
		$dept=$this->mdl_other->fetch_dept_name($this->input->post('sub_departement'));
		$price=$this->mdl_other->fetch_dept_price($this->input->post('sub_departement'));
 		$data = array('receptNumber' =>$receptNumber[1],
					  'departement' => 'Medical Certificate',
	 				  'cat_id' => $this->input->post('sub_departement'),
					  'cat_name' => $dept,	
					  'patient_name' => $this->input->post('name'),	
					  'age' => $this->input->post('age'),	
					  'gander' => $this->input->post('gander'),		
					  'shift' => $this->input->post('shift'),		
					  'address' => $this->input->post('address'),	
					  'type' => $this->input->post('type'),	
					  'date' => date('Y-m-d h:i'),		
					  'price' => $price,	
						 );


 		$certificate_receptNumber=$receptNumber[1];
		$this->session->set_userdata('certificate_receptNumber',$certificate_receptNumber);
		$query=$this->mdl_other->insert_certificate($data);
 	}


 	public function print_certificate()
 	{
 		$this->load->model('mdl_other');	
		$id=$this->session->userdata('certificate_receptNumber');
		$data['query']=$this->mdl_other->get_certificate_invoice_by_id($id);
		$this->load->view('certificate_print',$data);
 	}

 }


?>
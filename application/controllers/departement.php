<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departement extends CI_Controller {

	
	public function index()
	{
		$this->load->model('mdl_departement');
		$data['query']=$this->mdl_departement->get_departement();
		$this->load->view('add_departement',$data);
	}

	public function add_departement()
	{
		$this->load->model('mdl_departement');
		$data = array('name' =>ucfirst($this->input->post('sub_departement')),
					  'departement' =>ucfirst($this->input->post('departement')),	
					  'price' =>ucfirst($this->input->post('price'))	
					 );
	
		$this->mdl_departement->insert_departement($data);
		
	}
	public function edit_departement()
	{
		$this->load->model('mdl_departement');
		$sub_departement=$this->input->post('sub_departement');
		$departement=$this->input->post('departement');
		$price=$this->input->post('price');
		$id=$this->input->post('id');
		// echo $id;exit();
		$this->mdl_departement->edit_departement($sub_departement,$departement,$price,$id);
		
	}

	public function delete_departement()
	{
		$this->load->model('mdl_departement');
		$id=$this->input->post('id');
			$this->mdl_departement->delete_departement($id);	
	}

	public function fetch_departement_by_id()
	{
		$this->load->model('mdl_departement');
		$id=$this->input->post('id');
		$this->mdl_departement->fetch_departement_by_id($id);
	}

	public function sub_departement()
	{
		$this->load->model('mdl_departement');
		$departement=$this->input->post('value');
		$this->mdl_departement->sub_departement($departement);
	}

}//class end here	
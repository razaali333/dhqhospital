<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {


public function filter_day_report()
{
$this->load->model('mdl_report');
	$status=$this->input->post('status');

	if($status)
	{
		$this->mdl_report->filter_day_report($status);
	}		
}


public function daily_report()
{
	date_default_timezone_set('Asia/Karachi');
	$this->load->model('mdl_report');
	$search=$this->input->post('search');
	if(isset($search))
	{
		$from=$this->input->post('from');
		$to=$this->input->post('to');
		$recept=$this->input->post('recept');
		$p_name=$this->input->post('p_name');
		$gendar=$this->input->post('gendar');
		$type=$this->input->post('opd_type');
		$shift=$this->input->post('shift');

		$data['query']=$this->mdl_report->get_date_filter_record($search,$from,$to,$recept,$p_name,$gendar,$type,$shift);
	}
	else
	{
		$date=date('Y-m-d');
		$today=date('Y-m-d', strtotime($date)) . " 00:00:00";
		$data['query']=$this->mdl_report->get_daily_record($today);
	}

	$this->load->view('opd_daily_report',$data);	
}




function today_report()
{
		date_default_timezone_set('Asia/Karachi');
	$this->load->model('mdl_report');
	$search=$this->input->post('search');
	
		$recept=$this->input->post('recept');
		$p_name=$this->input->post('p_name');
		$gendar=$this->input->post('gendar');
		$shift=$this->input->post('shift');
		$data['query']=$this->mdl_report->get_today_record($search,$recept,$p_name,$gendar,$shift);
	
	$data['search']=$search;
	$this->load->view('today_report',$data);
}



public function monthly_report()
{
	$this->load->model('mdl_report');
	$search=$this->input->post('search');
	
		$from=$this->input->post('from');
		$to=$this->input->post('to');

		$type=$this->input->post('opd_type');
		$gendar=$this->input->post('gendar');
		$shift=$this->input->post('shift');

		$data['query']=$this->mdl_report->monthly_report($search,$from,$to,$type,$gendar,$shift);
	
	$data['search']=$search;
	$this->load->view('monthly_report',$data);
}




public function other_daily_report()
{
	date_default_timezone_set('Asia/Karachi');
	$this->load->model('mdl_report');
	$search=$this->input->post('search');
	if(isset($search))
	{
		$from=$this->input->post('from');
		$to=$this->input->post('to');
		$recept=$this->input->post('recept');
		$p_name=$this->input->post('p_name');
		$gendar=$this->input->post('gendar');
		$type=$this->input->post('opd_type');
		$shift=$this->input->post('shift');

		$data['query']=$this->mdl_report->get_date_filter_record($search,$from,$to,$recept,$p_name,$gendar,$type,$shift);
	}
	else
	{
		$date=date('Y-m-d');
		$today=date('Y-m-d', strtotime($date)) . " 00:00:00";
		$data['query']=$this->mdl_report->get_daily_record($today);
	}

	$this->load->view('opd_daily_report',$data);	
}




function other_today_report()
{
	date_default_timezone_set('Asia/Karachi');
	$this->load->model('mdl_report');
	$search=$this->input->post('search');
	
		$recept=$this->input->post('recept');
		$p_name=$this->input->post('p_name');
		$departement=$this->input->post('departement');
		$gendar=$this->input->post('gendar');
		$shift=$this->input->post('shift');
		$sub_dep=$this->input->post('sub_departement');
		$data['query']=$this->mdl_report->get_other_today_record($search,$recept,$p_name,$departement,$gendar,$shift,$sub_dep);
	$data['type']=$this->session->userdata('type');
	$this->load->view('other_today_report',$data);
}



public function other_monthly_report()
{
	$this->load->model('mdl_report');
	$search=$this->input->post('search');
	
		$from=$this->input->post('from');
		$to=$this->input->post('to');

		$type=$this->input->post('opd_type');
		$gendar=$this->input->post('gendar');
		$shift=$this->input->post('shift');

		$data['query']=$this->mdl_report->monthly_report($search,$from,$to,$type,$gendar,$shift);
	
	$data['search']=$search;
	$this->load->view('monthly_report',$data);
}

public function all_opd_report()
{
		$this->load->model('mdl_report');


		$search=$this->input->post('search');

		// echo "Search";exit();
			$from=$this->input->post('from');
			$to=$this->input->post('to');

		
		$query=$this->mdl_report->all_opd_report($search,$from,$to);
		$data['fm']=$query['fm_opd'];

		$data['sm']=$query['sm_opd'];
		$data['ff']=$query['ff_opd'];
		$data['sf']=$query['sf_opd'];
		$data['gyne']=$query['gyne_opd'];	
		$data['age']=$query['age_opd'];	
		$data['staff']=$query['staff_opd'];	
		$data['casualty']=$query['cas_opd'];	
		
		
		$this->load->view('all_opd_report',$data);
}

}

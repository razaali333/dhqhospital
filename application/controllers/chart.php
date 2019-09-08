<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chart extends CI_Controller {

		public function get_daily_chart()
		{
			$this->load->model('mdl_chart');
		$this->mdl_chart->get_opd_daily_chart();
		}

		public function get_weekly_chart()
		{
			$this->load->model('mdl_chart');
		$this->mdl_chart->get_opd_weekly_chart();
		}

		public function get_fifteen_chart()
		{
			$this->load->model('mdl_chart');
		$this->mdl_chart->get_opd_fifteen_chart();
		}

		public function get_monthly_chart()
		{
			$this->load->model('mdl_chart');
		$this->mdl_chart->get_opd_monthly_chart();
		}

		public function get_month_names_chart()
		{
			$this->load->model('mdl_chart');
			$value=$this->input->post('value');
			
			$this->mdl_chart->get_opd_name_monthly_chart($value);
		}
		
	}



?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');




class Mycal extends CI_Controller
{

	public function index()
	{
		$this->display();
	}

	public function display($year = null, $month = null)
	{
		parent::__construct();

		if (!$year)
		{
			$year = date('Y');
		}

		if (!$month)
		{
			$month = date('m');
		}
		
		$this->load->model('Mycal_model');
		
		if ($day = $this->input->post('day'))
		{
			$this->Mycal_model->add_calendar_data(
				"$year-$month-$day",
				$this->input->post('data')
			);
		}
		
		$data['calendar'] = $this->Mycal_model->generate($year, $month);

		$data['view'] = 'mycal';
		$this->load->view('includes/template', $data);
		
	}
	
}

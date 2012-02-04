<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller
{

	function index()
	{

		$data['view'] = 'contact_form';
		$this->load->view('includes/template', $data);

	}

	function submit()
	{

		$name = $this->input->post('name');

		$data['view'] = 'contact_submitted';

		if ($this->input->post('ajax'))
		{
			$this->load->view($data['view']);
		}
		else
		{
			$this->load->view('includes/template', $data);
		}
	}

}

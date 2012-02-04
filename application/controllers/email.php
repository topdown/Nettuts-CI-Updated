<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index() 
	{
		$data['view'] = 'newsletter';
		$this->load->view('includes/template', $data);
	}
	
	function send() 
	{	
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['view'] = 'newsletter';
			$this->load->view('includes/template', $data);
		}
		else
		{
			// validation has passed. Now send the email
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('code@valid-webs.com', 'Jeffrey');
			$this->email->to($email);		
			$this->email->subject('Test Newsletter Signup Confirmation');		
			$this->email->message('You\'ve now signed up, fool!');

			$path = $this->config->item('server_root');

			$file = $path . '/attachments/newsletter1.txt';

			$this->email->attach($file);

			if($this->email->send())
			{
				//echo 'Your email was sent, fool.';
				$data['view'] = 'signup_confirmation_view';
				$this->load->view('includes/template', $data);
			}
			else
			{
				show_error($this->email->print_debugger());
			}
		}
	}
}


      
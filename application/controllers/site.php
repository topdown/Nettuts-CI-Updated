<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('data_model');
		$this->load->model('site_model');

		$data['rows'] = $this->data_model->getAll();

		$this->is_logged_in();
	}

	public function members_area()
	{
		$data['view'] = 'logged_in_area';
		$this->load->view('includes/template', $data);
	}

	public function another_page() // just for sample
	{
		echo 'good. you\'re logged in.';
	}

	private function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if (!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';

			die();
			//$this->load->view('login_form');
		}
	}


	public function index()
	{
		$data = array();

//		$this->load->library('pagination');
//		$this->load->library('table');
//
//		$this->table->set_heading('Id', 'The Title', 'The Content');
//
//		$config['total_rows']     = $this->db->get('data')->num_rows();
//		$config['per_page']       = 10;
//		$config['num_links']      = 20;
//		$config['full_tag_open']  = '<div id="pagination">';
//		$config['full_tag_close'] = '</div>';
//
//		$this->pagination->initialize($config);
//
//		$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));

		if ($query = $this->site_model->get_records())
		{
			$data['records'] = $query;
		}

		$data['view'] = 'options_view';
		$this->load->view('includes/template', $data);

	}

	public function create()
	{
		$data = array(
			'title'   => $this->input->post('title'),
			'content' => $this->input->post('content')
		);

		$this->site_model->add_record($data);
		$this->index();
	}

	public function update()
	{
		$data = array(
			'title'   => 'My Freshly UPDATED Title',
			'content' => 'Content should go here; it is updated.'
		);

		$this->site_model->update_record($data);
		$this->index();
	}


	public function delete()
	{
		$this->site_model->delete_row();
		$this->index();
	}
}

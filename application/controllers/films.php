<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Films extends CI_Controller
{

	public function index()
	{
		$this->display();
	}

	public function display($sort_by = 'title', $sort_order = 'asc', $offset = 0)
	{

		$limit          = 20;
		$data['fields'] = array(
			'FID'      => 'ID',
			'title'    => 'Title',
			'category' => 'Category',
			'length'   => 'Length',
			'rating'   => 'Rating',
			'price'    => 'Price'
		);

		$this->load->model('film_model');

		$results = $this->film_model->search($limit, $offset, $sort_by, $sort_order);

		$data['films']       = $results['rows'];
		$data['num_results'] = $results['num_rows'];

		// pagination
		$this->load->library('pagination');
		$config                = array();
		$config['base_url']    = site_url("films/display/$sort_by/$sort_order");
		$config['total_rows']  = $data['num_results'];
		$config['per_page']    = $limit;
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$data['sort_by']    = $sort_by;
		$data['sort_order'] = $sort_order;

		$this->load->view('films', $data);
	}

}

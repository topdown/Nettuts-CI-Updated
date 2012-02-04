<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Films1 extends CI_Controller {


	public function index()
	{
		$this->display();
	}


	public function display($query_id = 0, $sort_by = 'title', $sort_order = 'asc', $offset = 0) {
		
		$limit = 20;
		$data['fields'] = array(
			'FID' => 'ID',
			'title' => 'Title',
			'category' => 'Category',
			'length' => 'Length',
			'rating' => 'Rating',
			'price' => 'Price'
		);
		
		$this->input->get($query_id);
		
		$query_array = array(
			'title' => $this->input->get('title'),
			'category' => $this->input->get('category'),
			'length_comparison' => $this->input->get('length_comparison'),
			'length' => $this->input->get('length'),
		);
		
		$data['query_id'] = $query_id;
		
		$this->load->model('film_model1');
		
		$results = $this->film_model1->search($query_array, $limit, $offset, $sort_by, $sort_order);
		
		$data['films'] = $results['rows'];
		$data['num_results'] = $results['num_rows'];
		
		// pagination
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = site_url("films/display/$query_id/$sort_by/$sort_order");
		$config['total_rows'] = $data['num_results'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = 6;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;
		
		$data['category_options'] = $this->film_model1->category_options();
		
		$this->load->view('films', $data);
	}
	
	
	public function search() {
		
		$query_array = array(
			'title' => $this->input->post('title'),
			'category' => $this->input->post('category'),
			'length_comparison' => $this->input->post('length_comparison'),
			'length' => $this->input->post('length'),
		);
		
		$query_id = $this->input->save_query($query_array);
		
		redirect("films/display/$query_id");
		
	}
	
}

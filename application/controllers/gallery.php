<?php if (!defined('BASEPATH')) exit('No direct script access allowed');




class Gallery extends CI_Controller
{

	public function index()
	{

		$this->load->model('Gallery_model');

		if ($this->input->post('upload'))
		{
			$this->Gallery_model->do_upload();
		}

		$data['images'] = $this->Gallery_model->get_images();

		$data['view'] = 'gallery';
		$this->load->view('includes/template', $data);
	}

}

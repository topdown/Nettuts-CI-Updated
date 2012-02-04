<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author    Jeff a.k.a. (topdown / phpbbxpert)
 * @package   blog
 * @created   on : Mar 14, 2010, 3:02:44 AM
 * @version   $Id:$
 * @copyright (c) 2009-10 Valid-Webs.com
 * @license   Not GLP Privately owned source code!
 */

class blog extends CI_Controller
{

	public $conf;

	function blog()
	{
		parent::__construct();
	}

	function index()
	{

		$this->load->library('parser');

		$this->load->model('Blog_model');

		/** @var $query CI_DB_mysql_result */
		$query = $this->db->query("SELECT * FROM blog");

		$this->load->library('parser');

		$data =  $query->result_array();


		$this->conf = array(
			'blog_title'   => $data[0]['blog_title'],
			'blog_heading' => $data[0]['blog_heading'],
			'content'       => $data[0]['post']
		);

		$this->parser->parse('includes/blog_template', $this->conf);

	}
}
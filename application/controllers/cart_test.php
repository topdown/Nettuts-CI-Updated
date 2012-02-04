<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class cart_test extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$scope_methods = get_class_methods($this);

		if ($parent_class = get_parent_class($this))
		{
			$parent_methods = get_class_methods($parent_class);
			$class_methods  = array_diff($scope_methods, $parent_methods);
		}
		else
		{
			$class_methods = $scope_methods;
		}

		echo ' <a href="' . base_url() . '">Home</a>    ';

		foreach ($class_methods as $page)
		{
			echo ' <a href="./' . $page . '">' . ucwords(str_replace('_', ' ', $page)) . '</a>    ';
		}

		echo '<br />';
		echo '<br />';

	}

	public function index()
	{
		$this->show();
	}

	function add()
	{

		$data = array(
			'id'      => '42',
			'name'    => 'Pants',
			'qty'     => 1,
			'price'   => 19.99,
			'options' => array('Size' => 'medium')
		);

		$this->cart->insert($data);
		echo "add() called";
	}

	function show()
	{

		$cart = $this->cart->contents();

		echo "<pre>";
		print_r($cart);
	}

	function add2()
	{

		$data = array(
			'id'      => '12',
			'name'    => 'T-shirt',
			'qty'     => 2,
			'price'   => 7.99,
			'options' => array('Size' => 'large')
		);

		$this->cart->insert($data);
		echo "add2() called";

	}

	function update()
	{

		$data = array(
			'rowid' => '456efa2d671ecce94aff804002e2047f',
			'qty'   => '1'
		);

		$this->cart->update($data);
		echo "update() called";
	}

	function total()
	{

		echo $this->cart->total();

	}

	function remove()
	{

		$data = array(
			'rowid' => '456efa2d671ecce94aff804002e2047f',
			'qty'   => '0'
		);

		$this->cart->update($data);
		echo "remove() called";
	}

	function destroy()
	{

		$this->cart->destroy();
		echo "destroy() called";
	}

}





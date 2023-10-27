<?php
class Belajar extends CI_Controller{
	public function _construct()
	{
		parent::_construct();
		$this->load->model('post');
	}

	public function index()
	{
		echo 'Hello World!';
	}
	public function view()
	{
		echo 'Look at this!';
	}
	public function edit()
	{
		echo 'Change at this!';
	}
	public function save()
	{
		echo 'Save at this!';
	}
}

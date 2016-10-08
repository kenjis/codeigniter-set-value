<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function set_value()
	{
		$this->load->helper('form');
		echo set_value('text');
	}

	public function form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('text', 'Text', 'required|max_length[1]');

		echo 'before form_validation->run(): ';
		echo set_value('text');
		echo '<br>';

		if ($this->form_validation->run()) {
			echo 'after validation success: ';
			echo set_value('text');
			echo '<br>';
		} else {
			echo 'after validation failed: ';
			echo set_value('text');
			echo '<br>';
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->data = array(
			'title' => "Home - Teitra Mega - IT Development And Services", 
		);

		$this->template->view('public/v_home', $this->data);
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller {


	public function index()
	{
		$this->load->view('labindia_view/layout/head_view.php');
	}
}

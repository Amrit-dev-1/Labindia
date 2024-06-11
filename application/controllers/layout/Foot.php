<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foot extends CI_Controller {


	public function index()
	{
		$this->load->view('labindia_view/layout/footer_view.php');
	}
}

<?php 
class Dashboard extends CI_Controller{
	function index()
	{
		$this->template->load('template','view_dashboard');
	}
}

 ?>
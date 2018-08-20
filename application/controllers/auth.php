<?php 
class Auth extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('model_operator');
	}

	function login()
	{
		if (isset($_POST['submit'])) {
			//proses login disini
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$hasil = $this->model_operator->login($username,$password);
			if ($hasil === 1) {
				$this->db->where('username',$username);
				$this->db->update('operator',array('last_login'=>date('Y-m-d')));
				$this->session->set_userdata(array('username'  => $username));
				echo "<script>alert('Selamat Datang');</script>";
				redirect('dashboard');
			}else{
				echo "<script>alert('Username/Password Salah');</script>";
				redirect('auth/login');
			}
		}
		$this->load->view('form_login');
	}

	function logout()
	{
		session_destroy();
		redirect('auth/login');
	}
}

 ?>
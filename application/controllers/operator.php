<?php 
class Operator extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_operator');
		// check_session();
	}


	function index()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/operator/index/';
		$config['total_rows'] = $this->model_operator->tampilkan_data()->num_rows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['paging']		= $this->pagination->create_links();
		$halaman			= $this->uri->segment(3);
		$halaman			= $halaman==''?0:$halaman;

		$data['record'] = $this->model_operator->tampilkan_data_paging($halaman,$config['per_page']);
		$this->template->load('template','operator/lihat_data', $data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$this->model_operator->post();
			redirect('operator');
		}else{
			$this->template->load('template','operator/form_input');	
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->model_operator->edit();
			redirect('operator');
		}else{
			$id = $this->uri->segment(3);
			$data['record'] = $this->model_operator->get_one($id)->row_array();
			$this->template->load('template','operator/form_edit', $data);
			// $this->load->view('operator/form_edit',$data);	
		}
	}

	function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->model_operator->delete($id);
		redirect('operator');
	}

}

 ?>
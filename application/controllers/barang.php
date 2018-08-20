<?php 
class Barang extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
		// check_session();
	}


	function index()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/barang/index/';
		$config['total_rows'] = $this->model_barang->tampilkan_data()->num_rows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['paging']		= $this->pagination->create_links();
		$halaman			= $this->uri->segment(3);
		$halaman			= $halaman==''?0:$halaman;

		$data['record'] = $this->model_barang->tampilkan_data_paging($halaman,$config['per_page']);
		$this->template->load('template','barang/lihat_data', $data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$this->model_barang->post();
			redirect('barang');
		}else{
			$this->load->model('model_kategori');
			$data['kategori'] = $this->model_kategori->tampilkan_data()->result();
		$this->template->load('template','barang/form_input', $data);
		}	
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->model_barang->edit();
			redirect('barang');
		}else{
			$id = $this->uri->segment(3);
			$this->load->model('model_kategori');
			$data['kategori'] = $this->model_kategori->tampilkan_data()->result();
			$data['record'] = $this->model_barang->get_one($id)->row_array();
			$this->template->load('template','barang/form_edit', $data);
		}
	}

	function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->model_barang->delete($id);
		redirect('barang');
	}

}

 ?>
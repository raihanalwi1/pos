<?php 
class model_operator extends CI_Model{
	function tampilkan_data()
	{
		return $this->db->get('operator');
	}

	function  login($username, $password)
	{	
		$check = $this->db->get_where('operator', array('username'=>$username, 'password'=>md5($password)));
		if ($check->num_rows()>0) {
			return 1;
		}else{
			return 0;
		}
	}

	function post()
	{
		$data = array(
						'nama_lengkap'=>$this->input->post('nama_lengkap'),
						'username'=>$this->input->post('username'),
						'password'=>md5($this->input->post('password'))
					);
		$this->db->insert('operator',$data);
	}

	function edit()
	{
		if (empty($_POST["password"])) {
			$data = array(
							'nama_lengkap'=>$this->input->post('nama_lengkap'),
							'username'=>$this->input->post('username')
						);
		}else{
			$data = array(
							'nama_lengkap'=>$this->input->post('nama_lengkap'),
							'username'=>$this->input->post('username'),
							'password'=>md5($this->input->post('password'))
						);
		}
		$this->db->where('operator_id',$this->input->post('id'));
		$this->db->update('operator', $data);
	}

	function get_one($id)
	{
		$param = array('operator_id'=>$id);
		return $this->db->get_where('operator',$param);
	}

	function delete($id)
	{
		$this->db->where('operator_id', $id);
		$this->db->delete('operator');
	}

	function tampilkan_data_paging($halaman,$batas)
	{
		return $this->db->query("SELECT * FROM operator LIMIT $halaman,$batas");
	}}

 ?>
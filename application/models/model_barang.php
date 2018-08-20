<?php 
class Model_barang extends CI_Model{
	function tampilkan_data()
	{
		return $this->db->get('barang');
	}

	function post()
	{
		$data = array(
						'nama_barang'=>$this->input->post('barang'),
						'kategori_id'=>$this->input->post('kategori'),
						'harga'=>$this->input->post('harga')
					);
		$this->db->insert('barang',$data);
	}

	function edit()
	{
		$data = array(
						'nama_barang'=>$this->input->post('barang'),
						'kategori_id'=>$this->input->post('kategori'),
						'harga'=>$this->input->post('harga')
					);
		$this->db->where('barang_id',$this->input->post('id'));
		$this->db->update('barang', $data);
	}

	function get_one($id)
	{
		$param = array('barang_id'=>$id);
		return $this->db->get_where('barang',$param);
	}

	function delete($id)
	{
		$this->db->where('barang_id', $id);
		$this->db->delete('barang');
	}

	function tampilkan_data_paging($halaman,$batas)
	{
		return $this->db->query("SELECT * FROM barang LIMIT $halaman,$batas");
	}}


 ?>
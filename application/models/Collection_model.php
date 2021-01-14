<?php 

/**
 * 
 */
class Collection_model extends CI_Model 
{
	
	public function getAllCollection() 

	{
		/*$query = $this->db->get('tb_collection');
		return $query->result_array();*/

		return $this->db->get('tb_collection')->result_array();
	}

	public function tambahDataCollection()
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'kd_jenis' => $this->input->post('kd_jenis', true),
			'jenis' => $this->input->post('jenis', true),
			'jumlah' => $this->input->post('jumlah',true),
			'harga' => $this->input->post('harga', true)
		);
		$this->db->insert('tb_collection', $data);
	}

	public function hapusDataCollection($id)
	{
		/*$this->db->where('id', $id);
		$this->db->delete('tb_collection');*/
		$this->db->delete('tb_collection','id='.$id);
	}

	public function getCollectionById($id)
	{
		/*$this->db->get_where('tb_collection', ['id'=>$id])->row_array();*/
		return $this->db->get_where('tb_collection', 'id='.$id)->row_array();
	}

	public function ubahDataCollection()
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'kd_jenis' => $this->input->post('kd_jenis', true),
			'jenis' => $this->input->post('jenis', true),
			'jumlah' => $this->input->post('jumlah',true),
			'harga' => $this->input->post('harga', true)
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_collection', $data);
	}

	public function cariDataCollection()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('kd_jenis', $keyword);
		$this->db->or_like('jenis', $keyword);
		$this->db->or_like('harga', $keyword);
		return $this->db->get('tb_collection')->result_array();
	}
}
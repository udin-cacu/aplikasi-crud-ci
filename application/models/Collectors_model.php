<?php 

class Collectors_model extends CI_Model
{
	public function getAllCollectors()
	{
		return $this->db->get('tb_collector')->result_array();
	}

	public function getCollectors($limit, $start, $keyword )
	{
		if($keyword){
			$this->db->like('nama', $keyword);			
			$this->db->or_like('alamat', $keyword);
		}
		return $this->db->get('tb_collector', $limit, $start)->result_array();
	}

	public function countAllCollectors()
	{
		return $this->db->get('tb_collector')->num_rows();
	}

	public function getCollectorsById($id)
	{
		/*$this->db->get_where('tb_collection', ['id'=>$id])->row_array();*/
		return $this->db->get_where('tb_collector', 'id='.$id)->row_array();
	}
}
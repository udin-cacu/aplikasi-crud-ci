<?php 

/**
 * 
 */
class Collectors extends CI_Controller 
{
	/*public function __construct()
	{
		parent::__construct();
		$this->load->model('Collection_model');
	}*/
	
	public function index() 

	{
		$data['judul'] = 'List Of Collector';

		$this->load->model('Collectors_model', 'collectors');

		//ambil data keyword
		if( $this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}


		//Config
		$this->db->like('nama', $data['keyword']);
		$this->db->from('tb_collector');
		
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 3;

		
		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['collectors'] = $this->collectors->getCollectors($config['per_page'], $data['start'], $data['keyword']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('collectors/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Collector';
		$data['collectors'] = $this->Collectors_model->getCollectorsById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('collectors/detail', $data);
		$this->load->view('templates/footer');
	}

	
}
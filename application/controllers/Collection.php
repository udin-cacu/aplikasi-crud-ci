<?php 

/**
 * 
 */
class Collection extends CI_Controller 
{
	/*public function __construct()
	{
		parent::__construct();
		$this->load->model('Collection_model');
	}*/
	
	public function index() 

	{
		$data['judul'] = 'Halaman Collection';
		$data['collection'] = $this->Collection_model->getAllCollection();
		if( $this->input->post('keyword') ){
			$data['collection'] = $this->Collection_model->cariDataCollection();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('collection/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Collection';

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('kd_jenis','Kode Jenis','required|min_length[5]');
		$this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
		$this->form_validation->set_rules('harga','Harga','required');
		if( $this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('collection/tambah', $data);
		$this->load->view('templates/footer');

	}else{
		$this->Collection_model->tambahDataCollection();
		$this->session->set_flashdata('pesan','Added');
		redirect('collection');
	}
	}

	public function hapus($id)
	{
		$this->Collection_model->hapusDataCollection($id);
		$this->session->set_flashdata('pesan','Deleted');
		redirect('collection');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Collection';
		$data['collection'] = $this->Collection_model->getCollectionById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('collection/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Update Collection';
		$data['collection'] = $this->Collection_model->getCollectionById($id);
		$data['jenis'] = ['Barang Langka','Barang Antik','Barang Sejarah'];

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('kd_jenis','Kode Jenis','required|min_length[5]');
		$this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
		$this->form_validation->set_rules('harga','Harga','required');
		if( $this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('collection/ubah', $data);
		$this->load->view('templates/footer');

	}else{
		$this->Collection_model->ubahDataCollection();
		$this->session->set_flashdata('pesan','Updated');
		redirect('collection');
	}
	}
}
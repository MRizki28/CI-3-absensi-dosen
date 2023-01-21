<?php
class absensi_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
        $this->load->model('absensi_model');
        if ($this->session->userdata('status') != 'login') {
			redirect(site_url('login_controller/masuk'));
		}
	}

	public function index()
    {
        $key['status'] = 'y';
        $absensi = $this->absensi_model->select($key);
        if(count($absensi)== 0)
        {
            unset($absensi);
            $absensi['tanggal'] = date('Y-m-d');
            $absensi['status'] = 'y';
            $this->absensi_model->insert($absensi);
        }
        $absensi = $this->absensi_model->select($key)[0];
        $key_detail['id_absensi'] = $absensi['id_absensi'];
        $data['detilss'] = $this->absensi_model->select_detail($key_detail);
        $data['dosens'] = $this->dosen_model->select();
        $data['absensi']=$absensi ;

		$konten['konten']=$this->load->view('absensi',$data,true);
		$this->load->view('template',$konten);
        // $this->load->view('transaksi',$data);

       
    }
    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_dosen','id absensi','');
        $this->form_validation->set_rules('id_absensi','id absensi','');
        $this->form_validation->set_rules('keterangan','keterangan','required');

        if ($this->form_validation->run()) {
            $detil['id_dosen']=$this->input->post('id_dosen');
            $detil['id_absensi']=$this->input->post('id_absensi');
            $detil['keterangan']=$this->input->post('keterangan');
            $this->absensi_model->insert_detail($detil);
             
        redirect(site_url('absensi_controller/index'));
        }else{
            echo "<script>alert('Ada data yang kosong tu!');history.go(-1);</script>";
        }

     
    }
    public function hapus($id)
    {
        $this->absensi_model->delete_detail($id);
        redirect(site_url('absensi_controller/index'));

    }
}

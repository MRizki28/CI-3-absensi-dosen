<?php

class dosen_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_model');
        if ($this->session->userdata('status') != 'login') {
            redirect(site_url('login_controller/login'));
        }
    }

    public function index()
    {
        $data['tb_dosen'] = $this->dosen_model->tampil_data();
        $this->load->view('info_dosen' , $data); 
    }

    public function add()
    {
        $this->load->view('info_dosen');
    }

    public function save()
    {
        if ($this->input->post('save')) {
            $this->dosen_model->simpan();
            redirect('dosen_controller/index','refresh');
        }else{
            redirect('dosen_controller/add','refresh');
        }
    }

    public function edit($id)
    {
        $where = array('id ' => $id);
        $data['tb_dosen'] = $this->dosen_model->edit_dosen($where,'tb_dosen')->result();
        $this->load->view('edit_dosen',$data);
    }

    public function update_dosen_db()
    {
        $id_dosen = $this->input->post('id');
        $nama_dosen = $this->input->post('nama_dosen');
        $nidn = $this->input->post('nidn');
        $data = array(
            'nama_dosen' => $nama_dosen,
            'nidn' => $nidn
        );

        $where = array('id' => $id_dosen);
        $this->dosen_model->update_dosen($where, $data, 'tb_dosen');
        redirect('dosen_controller/index');
    }

    public function hapus($id)
    {
        $where = array ('id' => $id);
        $this->dosen_model->hapus_dosen($where, 'tb_dosen');
        redirect('dosen_controller/index');
    }

  

}
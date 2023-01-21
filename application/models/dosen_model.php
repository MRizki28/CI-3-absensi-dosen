<?php

class dosen_model extends CI_Model
{
    private $table = 'tb_dosen';

    public function tampil_data()
    {
        return $this->db->get($this->table)->result();
    }

    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_dosen', 'NAMA DOSEN', 'required');
        $this->form_validation->set_rules('nidn', 'NIDN', 'required');

        $nama_dosen = $this->input->post('nama_dosen');
        $nidn = $this->input->post('nidn');


        if ($this->form_validation->run()) {
            $nama_dosen = $this->input->post('nama_dosen');
            $nidn = $this->input->post('nidn');
            $data = array(
                'nama_dosen' => $nama_dosen,
                'nidn' => $nidn
            );

            $this->db->insert('tb_dosen', $data);
        } else {
            echo "<script>alert('Periksa kembali, ada yang kosong tu !');history.go(-1);</script>";
        }
    }

    public function edit_dosen($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_dosen($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update('tb_dosen', $data);
    }

    public function hapus_dosen($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }



    public function select($key = null)
    {
        if ($key != null) {
            $this->db->where($key);
        }
        // return $this->db->get($this->table)->result_array();
        return $this->db->get('tb_dosen')->result_array();
    }
}

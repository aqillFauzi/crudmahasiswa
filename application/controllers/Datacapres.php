<?php

defined('BASEPATH') or exit('No direct script allowed');

class Datacapres extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datacapres_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Capres";
        $data['calon_presiden'] = $this->Datacapres_model->get();
        $this->load->view("layout/header");
        $this->load->view("datacapres/vw_datacapres", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Capres";
        $this->load->view("layout/header");
        $this->load->view("datacapres/vw_tambah_datacapres", $data);
        $this->load->view("layout/footer");
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Data Capres";
        $data['calon_presiden'] = $this->Datacapres_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("datacapres/vw_detail_datacapres", $data);
        $this->load->view("layout/footer");

    }
    public function hapus($id){
        $this->Datacapres_model->delete($id);
        redirect('Datacapres');
    }
    function upload(){
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'umur' => $this->input->post('umur'),
            
        ];
        $this->Datacapres_model->insert($data);
        redirect('Datacapres');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Data Capres";
        $data['calon_presiden'] = $this->Datacapres_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("datacapres/vw_ubah_datacapres", $data);
        $this->load->view("layout/footer");

    }
    public function update(){
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'umur' => $this->input->post('umur'),
        ];
        $id = $this->input->post('id');
        $this->Datacapres_model->update(['id' => $id], $data);
        redirect('Datacapres');
    }

}
?>
<?php

defined('BASEPATH') or exit('No direct script allowed');

class Ukm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ukm_model');
        $this->load->model('User_model', 'userrole');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Ukm";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ukm'] = $this->Ukm_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("ukm/vw_ukm", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Ukm";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ukm'] = $this->Ukm_model->get();

        $this->form_validation->set_rules('nama_ukm', 'Nama Ukm', 'required', [
            'required' => 'Nama UKM Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_ketua', 'Ketua', 'required', [
            'required' => 'Nama Ketua UKM Wajib di isi'
        ]);

        $this->form_validation->set_rules('banyak_peminat', 'Banyak Peminat', 'required|integer', [
            'required' => 'Banyak Peminat UKM Wajib di isi',
            'integer' => 'Banyak Peminat UKM harus angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("ukm/vw_tambah_ukm", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_ukm' => $this->input->post('nama_ukm'),
                'nama_ketua' => $this->input->post('nama_ketua'),
                'nama_wakil' => $this->input->post('nama_wakil'),
                'tahun_diresmikan' => $this->input->post('tahun_diresmikan'),
                'banyak_peminat' => $this->input->post('banyak_peminat'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),

            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/assets/img/ukm/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Ukm_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
            UKM Berhasil Ditambah!</div>');
            redirect('Ukm');
        }
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Data UKM";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ukm'] = $this->Ukm_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("ukm/vw_detail_ukm", $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->Ukm_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data UKM Berhasil Dihapus! </div>');
        redirect('Ukm');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit UKM";
        $data['ukm'] = $this->Ukm_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_ukm', 'Nama Ukm', 'required', [
            'required' => 'Nama UKM Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_ketua', 'Ketua', 'required', [
            'required' => 'Nama Ketua UKM Wajib di isi'
        ]);
        $this->form_validation->set_rules('banyak_peminat', 'Banyak Peminat', 'required|integer', [
            'required' => 'Banyak Peminat UKM Wajib di isi',
            'integer' => 'Banyak Peminat UKM harus angka'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("ukm/vw_ubah_ukm", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_ukm' => $this->input->post('nama_ukm'),
                'nama_ketua' => $this->input->post('nama_ketua'),
                'nama_wakil' => $this->input->post('nama_wakil'),
                'tahun_diresmikan' => $this->input->post('tahun_diresmikan'),
                'banyak_peminat' => $this->input->post('banyak_peminat'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),

            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/assets/img/ukm/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['ukm']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/assets/img/ukm/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Ukm_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data UKM Berhasil
            Diubah!</div>');
            redirect('Ukm');
        }
    }
}

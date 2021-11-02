<?php
defined("BASEPATH") or exit ('no direct script access allowed');

class Pertemuan7 extends CI_Controller
{
    public function index () 
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required',[
            'required' => 'Nama Pembeli Harus diisi',
        ]);
        $this->form_validation->set_rules('NomorHP', 'NomorHP', 'required',[
            'required' => 'Nomor HP Harus diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $data['Merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
            $this->load->view('reviewper7/v_input', $data);
        }   else {
            $data = [
                'nama' => $this->input->post('nama'),
                'NomorHP' => $this->input->post('NomorHP'),
                'Merk' => $this->input->post('Merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->Pertemuan7_model->proses($this->input->post('Merk'))
            ];
            $this ->load->view('reviewper7/v_output', $data);
        }
    }
    public function __construct ()
    {
        parent ::__construct();
        $this->load->model('Pertemuan7_model');
    }
}
<?php

Class Lokasi extends CI_Controller {

    public function index() {
        $data['lokasi'] = $this->db->get('tb_lokasi')->result();
        $this->template->load('template', 'lokasi/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $data = array('nama_lokasi' => $this->input->post('nama_lokasi'));
            $this->db->insert('tb_lokasi', $data);
            redirect('Lokasi');
            ;
        } else {
            $this->template->load('template', 'lokasi/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = array('nama_lokasi' => $this->input->post('nama_lokasi'));
            $id_lokasi = $this->input->post('id_lokasi');
            $this->db->where('id_lokasi', $id_lokasi);
            $this->db->update('tb_lokasi', $data);
            redirect('Lokasi');
            ;
        } else {
            $id_lokasi = $this->uri->segment(3);
            $data['lokasi'] = $this->db->get_where('tb_lokasi', array('id_lokasi' => $id_lokasi))->row_Array();
            $this->template->load('template', 'lokasi/edit', $data);
        }
    }
     function hapus() {
            $id = $this->uri->segment(3);
            $this->db->where('id_lokasi', $id);
            $this->db->delete('tb_lokasi');
            redirect('Lokasi');
        }
    


}

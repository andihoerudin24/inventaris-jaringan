<?php

Class Hub extends CI_Controller {

    public function index() {
        $data['hub'] = $this->db->get('tb_switch')->result();
        $this->template->load('template', 'switch/list', $data);
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $data = [
                'nama_switch' => $this->input->post('nama_switch'),
                'jumlah_port' => $this->input->post('jumlah_port'),
            ];
            $data = $this->db->insert('tb_switch', $data);
            redirect('Hub');
        } else {
            $this->template->load('template', 'switch/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = [
                'nama_switch' => $this->input->post('nama_switch'),
                'jumlah_port' => $this->input->post('jumlah_port'),
            ];
            $id = $this->input->post('id_switch');
            $this->db->where('id_switch', $id);
            $this->db->update('tb_switch', $data);
            redirect('Hub');
        } else {
            $id = $this->uri->segment(3);
            $data['edit'] = $this->db->get_where('tb_switch', array('id_switch' => $id))->row_Array();
            $this->template->load('template', 'switch/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_switch', $id);
        $this->db->delete('tb_switch');
        redirect('Hub');
    }

}

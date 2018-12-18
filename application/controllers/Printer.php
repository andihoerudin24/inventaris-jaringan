<?php

Class Printer extends CI_Controller {

    public function index() {
        $data['printer'] = $this->db->get('tb_printer')->result();
        $this->template->load('template', 'printer/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_printer' => $this->input->post('nama_printer'),
                'status' => $this->input->post('status')
            );
            $this->db->insert('tb_printer', $data);
            redirect('Printer');
        } else {
            $this->template->load('template', 'printer/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_printer' => $this->input->post('nama_printer'),
                'status' => $this->input->post('status')
            );
            $id_printer = $this->input->post('id_printer');
            $this->db->where('id_printer', $id_printer);
            $this->db->update('tb_printer', $data);
            redirect('Printer');
            ;
        } else {
            $id_printer = $this->uri->segment(3);
            $data['printer'] = $this->db->get_where('tb_printer', array('id_printer' => $id_printer))->row_Array();
            $this->template->load('template', 'printer/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_printer', $id);
        $this->db->delete('tb_printer');
        redirect('Printer');
    }

}

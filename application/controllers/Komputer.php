<?php

Class Komputer extends CI_Controller {

    public function index() {
        $data['komputer'] = $this->db->get('tb_pc')->result();
        $this->template->load('template', 'komputer/list', $data);
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $data = [
                'no_pc' => $this->input->post('no_pc'),
                'nama_pc' => $this->input->post('nama_pc'),
                'ip_add' => $this->input->post('ip_add'),
                'merk' => $this->input->post('merk'),
                'os' => $this->input->post('os'),
                'cpu' => $this->input->post('cpu'),
                'ram' => $this->input->post('ram'),
                'hdd' => $this->input->post('hdd'),
            ];
            $this->db->insert('tb_pc', $data);
            redirect('Komputer');
        } else {
            $this->template->load('template', 'komputer/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = [
                'no_pc' => $this->input->post('no_pc'),
                'nama_pc' => $this->input->post('nama_pc'),
                'ip_add' => $this->input->post('ip_add'),
                'merk' => $this->input->post('merk'),
                'os' => $this->input->post('os'),
                'cpu' => $this->input->post('cpu'),
                'ram' => $this->input->post('ram'),
                'hdd' => $this->input->post('hdd')
            ];
            $id = $this->input->post('no_urut');
            $this->db->where('no_urut', $id);
            $this->db->update('tb_pc', $data);
            redirect('Komputer');
        } else {

            $id = $this->uri->segment(3);
            $data['pc'] = $this->db->get_where('tb_pc', array('no_urut' => $id))->row_Array();
            $this->template->load('template', 'komputer/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('no_urut', $id);
        $this->db->delete('tb_pc');
        redirect('Komputer');
    }

}

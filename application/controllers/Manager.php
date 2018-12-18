<?php

Class Manager extends CI_Controller {

    public function index() {
        $data['ma'] = $this->db->get('tb_manager')->row_array();
        $this->template->load('template', 'manager/list', $data);
    }

    public function edit() {
        if (isset($_POST['submit'])) {
            $foto= $this->upload();
            $data=[
                'nama_manager'=> $this->input->post('nama_manager'),
                'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                'nik'=>$this->input->post('nik'),
                'email'=>$this->input->post('email'),
                'no_telpon'=>$this->input->post('no_telpon'),
                'foto'=>$foto
            ];
            $id=1;
            $this->db->where('id',$id);
            $this->db->update('tb_manager',$data);
            redirect('Manager');
            
        } else {
            $id=1;
            $data['edit']= $this->db->get_where('tb_manager',array('id'=>$id))->row_Array();
            $this->template->load('template', 'manager/edit',$data);
        }
    }

    function upload() {
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

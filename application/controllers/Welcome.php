<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['note']= $this->db->get('tb_note')->result();
        $data['jaringan'] = $this->db->count_all_results('tb_jaringan');
        $this->template->load('template', 'dashboard',$data);
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = [
                'note' => $this->input->post('note'),
            ];
            $id = 1;
            $this->db->where('id', $id);
            $this->db->update('tb_note',$data);
            redirect('Welcome');
        } else {
            $data['edit']= $this->db->get_where('tb_note',array('id'=>1))->row_Array();
            $this->template->load('template', 'editdashboard',$data);
        }
    }

}

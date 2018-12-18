<?php

Class Jaringan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_jaringan');
    }

    public function index() {
        $this->db->select('*');
        $this->db->from('tb_printer');
        $this->db->from('tb_switch');
        $this->db->from('tb_pc');
        $this->db->from('tb_lokasi');
        $this->db->join('tb_jaringan', 'tb_jaringan.id_switch=tb_switch.id_switch and tb_jaringan.id_printer=tb_printer.id_printer and tb_jaringan.id_pc=tb_pc.no_urut and tb_jaringan.id_lokasi=tb_lokasi.id_lokasi');
        $data['jaringan'] = $this->db->get()->result();
        //     $this->db->select('*');
        //   $this->db->from('gallery');
        // $this->db->join('album', 'album.id_album=gallery.id_album');
        // $data['gallery'] = $this->db->get()->result();
        // $data['jaringan'] = $this->db->get()->result();
        $this->template->load('template', 'jaringan/list', $data);
        
        
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $data = [
                'nama_jaringan' => $this->input->posT('nama_jaringan'),
                'id_pc' => $this->input->post('id_pc'),
                'id_printer' => $this->input->post('id_printer'),
                'id_switch' => $this->input->post('id_switch'),
                'id_lokasi' => $this->input->post('id_lokasi')
            ];
            //$chek = $this->input->post('id_pc');
            //  $get= $this->db->get_where('tb_pc',array('no_urut'=>$chek))->row_array();
            //$jaringan = $this->db->get('tb_jaringan', array('id_pc' => $chek))->row_array();
            //if ($jaringan['id_pc'] == $chek) {

                $this->db->insert('tb_jaringan', $data);
                redirect('Jaringan');
            //} else {
               // redirect('Jaringan/add');
            //}
        } else {
            $this->template->load('template', 'jaringan/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = [
                'nama_jaringan' => $this->input->posT('nama_jaringan'),
                'id_pc' => $this->input->post('id_pc'),
                'id_printer' => $this->input->post('id_printer'),
                'id_switch' => $this->input->post('id_switch'),
                'id_lokasi' => $this->input->post('id_lokasi')
            ];
            $id = $this->input->post('id_jaringan');
            $this->db->where('id_jaringan', $id);
            $this->db->update('tb_jaringan', $data);
            redirect('Jaringan');
        } else {
            $id = $this->uri->segment(3);
            $this->db->select('*');
            $this->db->from('tb_printer');
            $this->db->from('tb_switch');
            $this->db->from('tb_pc');
            $this->db->from('tb_lokasi');
            $this->db->where('id_jaringan', $id);
            $this->db->join('tb_jaringan', 'tb_jaringan.id_switch=tb_switch.id_switch and tb_jaringan.id_printer=tb_printer.id_printer and tb_jaringan.id_pc=tb_pc.no_urut and tb_jaringan.id_lokasi=tb_lokasi.id_lokasi');
            $data['jaringan'] = $this->db->get()->row_Array();
            $this->template->load('template', 'jaringan/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_jaringan', $id);
        $this->db->delete('tb_jaringan');
        redirect('Jaringan');
    }

    function cetak() {
        $pdf = new FPDF("L", "cm", "A4");
        $pdf->SetMargins(2, 1, 1);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 11);
        $pdf->Image('assets/images/logo.png',1.5,0.7,2,2);
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'RS Pelabuhan Jakarta',0,'L');
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'Telp : +62 021-4403026',0,'L');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'Website : www.rspelabuhan.com' ,0,'L');
        $pdf->SetX(4);
        $pdf->MultiCell(26.5,0.5,'Email : info@rspelabuhan.com',0,'L');
        $pdf->Line(1, 3.1, 28.5, 3.1);
        $pdf->SetLineWidth(0.1);
        $pdf->Line(1, 3.2, 28.5, 3.2);
        $pdf->SetLineWidth(0);
        $pdf->ln(1);
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(25.5, 0.7, "Laporan Inventaris Jaringan", 0, 10, 'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(5, 0.7, "Di cetak pada : " . date("D-d/m/Y"), 0, 0, 'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
        $pdf->Cell(3, 0.8, 'Ip addres', 1, 0, 'C');
        $pdf->Cell(4, 0.8, 'Nama pc', 1, 0, 'C');
        $pdf->Cell(10, 0.8, 'Spesifikasi', 1, 0, 'C');
        $pdf->Cell(2.5, 0.8, 'Nama Printer', 1, 0, 'C');
        $pdf->Cell(2.5, 0.8, 'Nama Switch', 1, 0, 'C');
        $pdf->Cell(3, 0.8, 'Lokasi', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $no = 1;
        $this->db->select('*');
        $this->db->from('tb_printer');
        $this->db->from('tb_switch');
        $this->db->from('tb_pc');
        $this->db->from('tb_lokasi');
        $this->db->join('tb_jaringan', 'tb_jaringan.id_switch=tb_switch.id_switch and tb_jaringan.id_printer=tb_printer.id_printer and tb_jaringan.id_pc=tb_pc.no_urut and tb_jaringan.id_lokasi=tb_lokasi.id_lokasi');
        $data = $this->db->get()->result();
        foreach ($data as $j) {
            $pdf->Cell(1, 0.8, $no, 1, 0, 'C');
            $pdf->Cell(3, 0.8, $j->ip_add, 1, 0, 'C');
            $pdf->Cell(4, 0.8, $j->nama_pc, 1, 0, 'C');
            $pdf->Cell(2.5, 0.8, $j->os, 1, 0, 'C');
            $pdf->Cell(2.5, 0.8, $j->cpu, 1, 0, 'C');
            $pdf->Cell(2.5, 0.8, $j->hdd . ' HDD', 1, 0, 'C');
            $pdf->Cell(2.5, 0.8, $j->ram . ' RAM', 1, 0, 'C');
            $pdf->Cell(2.5, 0.8, $j->nama_printer, 1, 0, 'C');
            $pdf->Cell(2.5, 0.8, $j->nama_switch, 1, 0, 'C');
            $pdf->Cell(3, 0.8, $j->nama_lokasi, 1, 1, 'C');



            $no++;
        }
          $name= $this->db->get_where('tb_manager')->row_Array();
        $pdf->ln(0.5);
        $pdf->Cell(8, 0.8, 'Mengetahui', 0, 0, 'C');
        $pdf->Cell(1, 0.8, '', 0, 0, 'C');
 //       $pdf->Cell(8, 0.8, 'Penerima', 0, 1, 'C');
        $pdf->ln(1.5);
        $pdf->Cell(8, 0.8, ''.$name['nama_manager'] .'', 0, 1, 'C');
        $pdf->Cell(8, 0.8, '(' .$name['nik'] . ')', 0, 0, 'C');
        $pdf->Cell(1, 0.8, '', 0, 0, 'C');
//        $pdf->Cell(8.5, 0.8, '(................................)', 0, 1, 'C');
        $pdf->Output("Print_peminjaman_Barang.pdf","I");

    }

}

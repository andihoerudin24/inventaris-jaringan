<?php

Class Model_jaringan extends CI_Model{

    function br() {
        $this->db->select('*');
        $this->db->from('tb_printer');
        $this->db->from('tb_switch');
        $this->db->from('tb_pc');
        $this->db->from('tb_lokasi');
        $this->db->join('tb_jaringan', 'tb_jaringan.id_switch=tb_switch.id_switch and tb_jaringan.id_printer=tb_printer.id_printer and tb_jaringan.id_pc=tb_pc.no_urut and tb_jaringan.id_lokasi=tb_lokasi.id_lokasi');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('tb_printer');
        $this->db->from('tb_switch');
        $this->db->from('tb_pc');
        $this->db->from('tb_lokasi');
        $this->db->join('tb_jaringan', 'tb_jaringan.id_switch=tb_switch.id_switch and tb_jaringan.id_printer=tb_printer.id_printer and tb_jaringan.id_pc=tb_pc.no_urut and tb_jaringan.id_lokasi=tb_lokasi.id_lokasi');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

}

?>
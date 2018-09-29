<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_widget extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
        
    }

    public function widget_hari_ini(){
        $date=date('Y-m-d');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and timestamp like '%$date%'");
        return $query->num_rows();
    }

    public function widget_bulan_ini(){
        $month=date('Y-m');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and timestamp like '%$month%'");
        return $query->num_rows();
    }

    public function widget_tahun_ini(){
        $year=date('Y');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and timestamp like '%$year%'");
        return $query->num_rows();
    }


    //------------------Widget ICMP atau TCP-------------------------------------------
    public function total_serangan(){
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744'");
        return $query->num_rows();
    }

    public function icmp_attack(){
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and signature='513' ");
        return $query->num_rows();
    }

    public function tcp_attack(){
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and signature !='513' ");
        return $query->num_rows();
    }

    //-----------------Widget Donut chart--------------------------

    public function icmp_counter(){
        $date=date('Y-m-d');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and signature='513' and timestamp like '%$date%'");
        return $query->num_rows();
    }

    public function ftp_counter(){
        $date=date('Y-m-d');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and signature='515' and timestamp like '%$date%'");
        return $query->num_rows();
    }

    public function ssh_counter(){
        $date=date('Y-m-d');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and signature='516' and timestamp like '%$date%'");
        return $query->num_rows();
    }

    public function telnet_counter(){
        $date=date('Y-m-d');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and signature='517' and timestamp like '%$date%'");
        return $query->num_rows();
    }

    public function http_counter(){
        $date=date('Y-m-d');
        $query  = $this->db->query("SELECT * FROM acid_event where ip_src !='3232246744' and signature='514' and timestamp like '%$date%'");
        return $query->num_rows();
    }

    function __destruct() {
        $this->db->close();
    }
}
?>

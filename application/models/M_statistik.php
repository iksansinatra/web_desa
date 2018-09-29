<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_statistik extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('statistik', $data);
    }

    public function record_count() {
        return $this->db->count_all("statistik");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("statistik");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_statistik() {
        $query  = $this->db->query("select * from statistik");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('statistik', $data, array('id_statistik'=>$data['id_statistik']));
    }

    public function delete($id) {
        $this->db->delete('statistik', array('id_statistik' => $id));
    }

}
?>

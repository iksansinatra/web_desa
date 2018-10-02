<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sejarah_desa extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_desa', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_desa");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_desa");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_desa() {
        $query  = $this->db->query("select * from table_desa");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_desa', $data, array('sejarah_id'=>$data['sejarah_id']));
    }

    public function delete($id) {
        $this->db->delete('table_desa', array('sejarah_id' => $id));
    }

}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kontak', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kontak");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kontak");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

  public function tampil_data_kontak() {
        $query  = $this->db->query("select * from table_kontak");
        return $query->result();
    }

  public function edit($data) {
        $this->db->update('table_kontak', $data, array('kontak_id'=>$data['kontak_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kontak', array('kontak_id' => $id));
    }

}
?>

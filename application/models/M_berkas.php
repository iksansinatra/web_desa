<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berkas extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_berkas', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_berkas");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_berkas");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_berkas() {
        $query  = $this->db->query("select * from table_berkas");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_berkas', $data, array('berkas_id'=>$data['berkas_id']));
    }

    public function delete($id) {
        $this->db->delete('table_berkas', array('berkas_id' => $id));
    }

}
?>

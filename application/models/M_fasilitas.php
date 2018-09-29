<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_fasilitas', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_fasilitas");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_fasilitas");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_fasilitas() {
        $query  = $this->db->query("select * from table_fasilitas");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_fasilitas', $data, array('fasilitas_id'=>$data['fasilitas_id']));
    }

    public function delete($id) {
        $this->db->delete('table_fasilitas', array('fasilitas_id' => $id));
    }

}
?>

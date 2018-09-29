<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_belanja extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_belanja', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_belanja");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_belanja");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_belanja() {
        $query  = $this->db->query("select * from table_belanja");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_belanja', $data, array('belanja_id'=>$data['belanja_id']));
    }

    public function delete($id) {
        $this->db->delete('table_belanja', array('belanja_id' => $id));
    }

}
?>

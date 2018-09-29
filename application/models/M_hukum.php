<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hukum extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('hukum', $data);
    }

    public function record_count() {
        return $this->db->count_all("hukum");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("hukum");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_hukum() {
        $query  = $this->db->query("select * from hukum");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('hukum', $data, array('id_hukum'=>$data['id_hukum']));
    }

    public function delete($id) {
        $this->db->delete('hukum', array('id_hukum' => $id));
    }

}
?>

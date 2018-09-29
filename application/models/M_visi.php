<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visi extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('visi', $data);
    }

    public function record_count() {
        return $this->db->count_all("visi");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("visi");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_visi() {
        $query  = $this->db->query("select * from visi");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('visi', $data, array('id_visi'=>$data['id_visi']));
    }

    public function delete($id) {
        $this->db->delete('visi', array('id_visi' => $id));
    }

}
?>

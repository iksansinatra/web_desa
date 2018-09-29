<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_skripsi extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('skripsi', $data);
    }

    public function record_count() {
        return $this->db->count_all("skripsi");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("skripsi");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_skripsi() {
        $query  = $this->db->query("select * from skripsi");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('skripsi', $data, array('id_skripsi'=>$data['id_skripsi']));
    }

    public function delete($id) {
        $this->db->delete('skripsi', array('id_skripsi' => $id));
    }

}
?>

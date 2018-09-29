<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('galeri', $data);
    }

    public function record_count() {
        return $this->db->count_all("galeri");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("galeri");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_galeri() {
        $query  = $this->db->query("select * from galeri");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('galeri', $data, array('id_galeri'=>$data['id_galeri']));
    }

    public function delete($id) {
        $this->db->delete('galeri', array('id_galeri' => $id));
    }

}
?>

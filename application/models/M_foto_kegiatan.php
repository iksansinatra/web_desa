<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto_kegiatan extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kegiatan', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kegiatan");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kegiatan");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_foto() {
        $query  = $this->db->query("select * from table_kegiatan");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kegiatan', $data, array('image_id'=>$data['image_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kegiatan', array('image_id' => $id));
    }

}
?>

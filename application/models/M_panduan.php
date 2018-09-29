<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_panduan extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_guide', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_guide");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_guide");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_panduan() {
        $query  = $this->db->query("select * from table_guide");
        return $query->result();
    }

	public function tampil_data_panduan1() {
        $query  = $this->db->query("select * from table_guidecategory");
        return $query->result();
    }

	public function tampil_data_panduan2() {
        $this->db->select('*');
        $this->db->from('table_guidecategory');
        $this->db->join('table_guide', 'table_guide.guidecategory_id = table_guidecategory.guidecategory_id');

        $query = $this->db->get();
        return $query->result();
    }



	public function edit($data) {
        $this->db->update('table_guide', $data, array('guide_id'=>$data['guide_id']));
    }

    public function delete($id) {
        $this->db->delete('table_guide', array('guide_id' => $id));
    }

}
?>

<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class layananlainnya extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data layananakademik
    function index_get() {
        $layanan_lainnya_id = $this->get('layanan_lainnya_id');
        if ($layanan_lainnya_id == '') {
            $layanan_lainnya = $this->db->get('layanan_lainnya')->result();
        } else {
            $this->db->where('layanan_lainnya_id', $layanan_lainnya_id);
            $layanan_lainnya = $this->db->get('layanan_lainnya_id')->result();
        }
        $this->response($layanan_lainnya, 200);
    }
 
    // insert new data to layananakademik
    function index_post() {
        $data = array(
                    'layanan_lainnya_id'           => $this->post('layanan_lainnya_id'),
                    
					'kode_satker'          => $this->post('kode_satker'),
                    'tahun'    => $this->post('tahun'),
                    'bulan'        => $this->post('bulan'),
                    'indikator'        => $this->post('indikator'),
                    'jumlah'        => $this->post('jumlah'),
                    
                    'tgl_update'        => $this->post('tgl_update'));
        $insert = $this->db->insert('layanan_lainnya', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data layananakademik
    function index_put() {
        $layanan_lainnya_id = $this->put('layanan_lainnya_id');
        $data = array(
                    
                    'layanan_lainnya_id'  => $this->put('layanan_lainnya_id'),
					
                    'kode_satker'          => $this->put('kode_satker'),
                    'tahun'    			   => $this->put('tahun'),
                    'bulan'        		   => $this->put('bulan'),
                    'indikator'        => $this->put('indikator'),
                    'jumlah'         => $this->put('jumlah'),
                   
                    'tgl_update'           => $this->put('tgl_update'));
					
        $this->db->where('layanan_lainnya_id', $layanan_lainnya_id);
        $update = $this->db->update('layanan_lainnya', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete mahasiswa
    function index_delete() {
        $layanan_lainnya_id = $this->delete('layanan_lainnya_id');
        $this->db->where('layanan_lainnya_id', $layanan_lainnya_id);
        $delete = $this->db->delete('layanan_lainnya');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}
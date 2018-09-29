<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class layananakademik extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data layananakademik
    function index_get() {
        $layanan_akademik_id = $this->get('layanan_akademik_id');
        if ($layanan_akademik_id == '') {
            $layananakademik = $this->db->get('layananakademik')->result();
        } else {
            $this->db->where('layanan_akademik_id', $layanan_akademik_id);
            $layananakademik = $this->db->get('layananakademik')->result();
        }
        $this->response($layananakademik, 200);
    }
 
    // insert new data to layananakademik
    function index_post() {
        $data = array(
                    'layanan_akademik_id'           => $this->post('layanan_akademik_id'),
                    'kode_satker'          => $this->post('kode_satker'),
                    'tahun'    => $this->post('tahun'),
                    'bulan'        => $this->post('bulan'),
                    'kode_fakultas'        => $this->post('kode_fakultas'),
                    'kode_program'        => $this->post('kode_program'),
                    'kode_akreditasi'        => $this->post('kode_akreditasi'),
                    'kode_jurusan'        => $this->post('kode_jurusan'),
                    'tgl_update'        => $this->post('tgl_update'));
        $insert = $this->db->insert('layananakademik', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data layananakademik
    function index_put() {
        $layanan_akademik_id = $this->put('layanan_akademik_id');
        $data = array(
                    
                    'layanan_akademik_id'  => $this->put('layanan_akademik_id'),
                    'kode_satker'          => $this->put('kode_satker'),
                    'tahun'    			   => $this->put('tahun'),
                    'bulan'        		   => $this->put('bulan'),
                    'kode_fakultas'        => $this->put('kode_fakultas'),
                    'kode_program'         => $this->put('kode_program'),
                    'kode_akreditasi'      => $this->put('kode_akreditasi'),
                    'kode_jurusan'         => $this->put('kode_jurusan'),
                    'tgl_update'           => $this->put('tgl_update'));
					
        $this->db->where('layanan_akademik_id', $layanan_akademik_id);
        $update = $this->db->update('layananakademik', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete mahasiswa
    function index_delete() {
        $layanan_akademik_id = $this->delete('layanan_akademik_id');
        $this->db->where('layanan_akademik_id', $layanan_akademik_id);
        $delete = $this->db->delete('layananakademik');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}
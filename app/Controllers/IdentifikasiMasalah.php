<?php

namespace App\Controllers;

class IdentifikasiMasalah extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); // Initialize the database connection
    }

    public function index()
    {

        return view('identifikasi_masalah');
    }

    public function admin()
    {
        $data = [
            'controller'        => 'IdentifikasiMasalah',
            'title'             => ucwords('identifikasi masalah')
        ];

        return view('identifikasi_masalah_admin', $data);
    }

    // Inside your Controller class
    public function getKondisiTanamanFromPost()
    {
        // Get POST data
        $rpc = $this->request->getPost('rpc');
        $kebun = $this->request->getPost('kebun');
        $afd = $this->request->getPost('afd');
        $no_blok = $this->request->getPost('no_blok');

        // Initialize an array to store the conditions
        $conditions = [];

        // Check if each POST value is not null, then add it as a condition
        if ($rpc !== null) {
            $conditions['RPC'] = $rpc;
        }
        if ($kebun !== null) {
            $conditions['Kebun'] = $kebun;
        }
        if ($afd !== null) {
            $conditions['Afd'] = $afd;
        }
        if ($no_blok !== null) {
            $conditions['No_Blok'] = $no_blok;
        }

        // Build and execute the query
        $query = $this->db->table('KondisiTanaman2');

        // Add conditions to the query
        foreach ($conditions as $column => $value) {
            $query->like($column, $value);
        }

        // Add additional condition
        $query->whereIn('Kriteria', ['EMAS', 'MERAH']);

        // return $query->get()->getResult();
        return $this->response->setJSON($query->get()->getResult());
    }
}

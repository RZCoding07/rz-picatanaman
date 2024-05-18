<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Upload extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $data = $this->request->getPost('data');
        $data = json_decode((string)$data, true);
        $message = '';
        $success = false;
        $err = '';
        if ($data !== null && is_array($data)) {
            $current_year = date("Y");
            $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            $refined = [];
            $finData = [];
            foreach ($data as $entry) {
                for ($i = 0; $i < 12; $i++) { // Loop through 12 months
                    $realisasi = $entry[10 + $i] ?? null;
                    $kriteria = $entry[22 + $i] ?? null;
                    if ($realisasi !== null) {
                        $dataInsert = [
                            'RPC' => $entry[34],
                            'Kondisi' => $entry[0],
                            'Status' => $entry[1],
                            'Kebun' => $entry[2],
                            'KKL_KEBUN' => $entry[3],
                            'Afd' => $entry[4],
                            'Tahun_Tanam' => $entry[5],
                            'No_Blok' => $entry[6],
                            'Luas_Ha' => $entry[7],
                            'Jlh_Pokok' => $entry[8],
                            'Pkk_Ha' => $entry[9],
                            'Realisasi_Bulan' => $months[$i],
                            'Realisasi_Tahun' => $current_year,
                            'Realisasi' => $realisasi,
                            'Kriteria' => $kriteria
                        ];
                        array_push($refined, $dataInsert);
                    }
                }
            }
            try {
                $this->db->table('KondisiTanaman')->insertBatch($refined);
                $success = true;
                $message = 'Berhasil menambahkan data';
            } catch (\Throwable $th) {
                $message = 'Gagal menambahkan data';
                $err = $th->getMessage();
                $success = false;
            }
            return $this->response->setJSON([
                'message' => $message,
                'success' => $success,
                'error' => $err,
                'data' => $refined
            ]);
        } else {
            return $this->response->setJSON([
                'message' => 'Tidak ada data',
                'success' => true,
                'error' => $err
            ]);
        }
    }

    public function uploadKuadran()
    {
        $data = $this->request->getPost('data');
        if ($data === null) {
        }

        foreach ($data as $entry) {
            if (!is_null($entry[5])) {
                // Consider adding additional data integrity checks here
                $dataInsert = [
                    'rpc' => $entry[0],
                    'kebun' => $entry[1],
                    'pica' => $entry[2],
                    'cashcost' => $entry[3],
                    'kriteria' => $entry[4],
                    'tahun' => $entry[6],
                    'bulan' => $entry[5],
                ];
                $this->db->table('kuadran')->insert($dataInsert);
            }
        }

        print_r($data); // Print the data to see the structure
    }


    public function uploadFile($path, $image)
    {
        if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
        }
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move('./' . $path, $newName);
            return $path . '/' . $newName;
        }
        return "";
    }
}

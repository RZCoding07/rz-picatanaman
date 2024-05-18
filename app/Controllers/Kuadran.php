<?php

namespace App\Controllers;

class Kuadran extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); // Initialize the database connection
    }

    public function index()
    {
        return view('grafik_kuadran');
    }

    public function getBulanTahunRpc()
    {
        $tahun = $this->request->getPost('tahun');
        $bulan = $this->request->getPost('bulan');
        $rpc = $this->request->getPost('rpc');


        $data = $this->db->table('kuadran')
            ->where('tahun', $tahun)
            ->where('bulan', $bulan);


        if ($rpc != 99) {
            $data->where('rpc', $rpc);
        }
        $data = $data->get()
            ->getResultArray();

        // return $this->response->setJSON($data);


        // Initialize an array to hold the counts of each kriteria
        // $kriteria_counts = [];

        // // Iterate over each entry in the data
        // foreach ($data as $entry) {
        //     $kriteria = $entry['kriteria'];
        //     if (isset($kriteria_counts[$kriteria])) {
        //         $kriteria_counts[$kriteria]++;
        //     } else {
        //         $kriteria_counts[$kriteria] = 1;
        //     }
        // }

        $count = [
            'MERAH' => 0,
            'ORANGE' => 0,
            'HIJAU' => 0,
            'KUNING' => 0
        ];

        foreach ($data as $entry) {
            $cashCost = (float)$entry['cashcost'];
            $nilaiPica = (float)$entry['pica'];
            $color = $this->determineColor($cashCost, $nilaiPica);
            if (isset($count[$color])) {
                $count[$color]++;
            }
        }


        $dataChart = [];
        $kebun = [];
        foreach ($data as $key => $value) {
            $dataChart[$key][0] = round(floatval($value['pica']), 2);
            $dataChart[$key][1] = round(floatval($value['cashcost']), 2);
            $kebun[] = $value['kebun'];
        }
        // print_r($dataChart);
        header('Content-Type: application/json');
        return $this->response->setJSON(['lbl' => $kebun, 'res' => $dataChart, 'kriteria' => $count]);

        // echo json_encode($dataChart);
    }

    public function getAllRpc()
    {
        $data = $this->db->table('kuadran')->select('rpc')->groupBy('rpc')->get()->getResultArray();
        return $this->response->setJSON($data);
    }
    public function getAllKebun()
    {
        $data = $this->db->table('kuadran')->select('kebun')->groupBy('kebun')->get()->getResultArray();
        // print_r($data);
        return $this->response->setJSON($data);
    }
    public function getAllBulan()
    {
        $data = $this->db->table('kuadran')->select('bulan')->groupBy('bulan')->get()->getResultArray();
        return $this->response->setJSON($data);
    }
    public function getAllTahun()
    {
        $data = $this->db->table('kuadran')->select('tahun')->groupBy('tahun')->get()->getResultArray();
        return $this->response->setJSON($data);
    }

    public function determineColor($cashCost, $nilaiPica)
    {
        if ($cashCost > 2500 && $nilaiPica < 3) {
            return 'MERAH';
        } elseif ($cashCost > 2500 && $nilaiPica > 3) {
            return 'ORANGE';
        } elseif ($cashCost < 2500 && $nilaiPica > 3) {
            return 'HIJAU';
        } elseif ($cashCost < 2500 && $nilaiPica < 3) {
            return 'KUNING';
        } else {
            return 'undefined';
        }
    }
}

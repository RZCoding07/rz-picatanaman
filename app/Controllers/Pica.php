<?php

namespace App\Controllers;

class Pica extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); // Initialize the database connection
    }

    public function index(): string
    {
        return view('pica');
    }

    public function getTahunBulanRpcKebun()
    {
        // Retrieve POST data
        $tahun = $this->request->getPost('tahun');
        $bulan = $this->request->getPost('bulan');
        $rpc = $this->request->getPost('rpc');
        $kebun = $this->request->getPost('kebun');

        // Initialize the query builder
        $query = $this->db->table('KondisiTanaman')
            ->where('Realisasi_Tahun', $tahun)
            ->where('Realisasi_Bulan', $bulan);

        // Add RPC condition only if it's not 99
        if ($rpc != 99) {
            $query->where('RPC', $rpc);
        }
        if ($kebun != 99) {
            $query->where('Kebun', $kebun);
        }

        // return the sql code
        // return $this->response->setJSON($query->getCompiledSelect());

        // Execute the query and fetch the results
        $data = $query->get()->getResultArray();
        // print_r($this->db->getLastQuery());

        // Transform the data for the graph
        $graphData = $this->transformDataForGraph($data);

        // Return the transformed data as JSON
        return $this->response->setJSON($graphData);
    }


    private function transformDataForGraph($data)
    {


        // Initialize an array to hold the total "Luas_Ha" for each status and kriteria
        $result = [
            "TOTAL" => [
                ["value" => 0, "name" => "EMAS"],
                ["value" => 0, "name" => "HITAM"],
                ["value" => 0, "name" => "MERAH"],
                ["value" => 0, "name" => "KUNING"],
                ["value" => 0, "name" => "HIJAU"]
            ],
            "DEWASA" => [
                ["value" => 0, "name" => "EMAS"],
                ["value" => 0, "name" => "HITAM"],
                ["value" => 0, "name" => "MERAH"],
                ["value" => 0, "name" => "KUNING"],
                ["value" => 0, "name" => "HIJAU"]
            ],
            "MUDA" => [
                ["value" => 0, "name" => "EMAS"],
                ["value" => 0, "name" => "HITAM"],
                ["value" => 0, "name" => "MERAH"],
                ["value" => 0, "name" => "KUNING"],
                ["value" => 0, "name" => "HIJAU"]
            ],
            "REMAJA" => [
                ["value" => 0, "name" => "EMAS"],
                ["value" => 0, "name" => "HITAM"],
                ["value" => 0, "name" => "MERAH"],
                ["value" => 0, "name" => "KUNING"],
                ["value" => 0, "name" => "HIJAU"]
            ],
            "TUA" => [
                ["value" => 0, "name" => "EMAS"],
                ["value" => 0, "name" => "HITAM"],
                ["value" => 0, "name" => "MERAH"],
                ["value" => 0, "name" => "KUNING"],
                ["value" => 0, "name" => "HIJAU"]
            ],
            "RENTA" => [
                ["value" => 0, "name" => "EMAS"],
                ["value" => 0, "name" => "HITAM"],
                ["value" => 0, "name" => "MERAH"],
                ["value" => 0, "name" => "KUNING"],
                ["value" => 0, "name" => "HIJAU"]
            ]
        ];

        // example data
        // {
        //     "id": "1",
        //     "RPC": "RPC1",
        //     "Kondisi": " B. Tanaman Menghasilkan ",
        //     "Status": "DEWASA",
        //     "Kebun": "KSD",
        //     "KKL_KEBUN": "S3",
        //     "Afd": "AFD01",
        //     "Tahun_Tanam": "2006",
        //     "No_Blok": "AA13",
        //     "Luas_Ha": "23.85",
        //     "Jlh_Pokok": "3102",
        //     "Pkk_Ha": "130",
        //     "Realisasi_Bulan": "Januari",
        //     "Realisasi_Tahun": "2024",
        //     "Realisasi": "2217",
        //     "Kriteria": "EMAS",
        //     "created_at": "2024-05-17 13:29:31",
        //     "updated_at": "2024-05-17 13:29:31"
        // }

        // Process the input data
        foreach ($data as $entry) {
            $status = strtoupper($entry['Status']);
            $criteriaName = strtoupper($entry['Kriteria']);
            $luasHa = floatval($entry['Luas_Ha']);

            if (isset($result[$status])) {
                foreach ($result[$status] as &$criteria) {
                    if ($criteria['name'] === $criteriaName) {
                        $criteria['value'] += $luasHa;
                    }
                }
            }
        }

        // Calculate TOTAL
        foreach ($result as $status => $criteriaArray) {
            if ($status !== "TOTAL") {
                foreach ($criteriaArray as $index => $criteria) {
                    $result["TOTAL"][$index]['value'] += $criteria['value'];
                }
            }
        }

        // Output the result as JSON
        // return $this->response->setJSON($result);
        return $result;
    }


    public function getAllRpc()
    {
        $data = $this->db->table('KondisiTanaman')->select('RPC')->groupBy('RPC')->get()->getResultArray();
        return $this->response->setJSON($data);
    }
    public function getAllKebun()
    {
        $data = $this->db->table('KondisiTanaman')->select('Kebun')->groupBy('Kebun')->get()->getResultArray();
        return $this->response->setJSON($data);
    }
    public function getAllBulan()
    {
        $data = $this->db->table('KondisiTanaman')->select('Realisasi_Bulan')->groupBy('Realisasi_Bulan')->get()->getResultArray();
        return $this->response->setJSON($data);
    }
    public function getAllTahun()
    {
        $data = $this->db->table('KondisiTanaman')->select('Realisasi_Tahun')->groupBy('Realisasi_Tahun')->get()->getResultArray();
        return $this->response->setJSON($data);
    }
}

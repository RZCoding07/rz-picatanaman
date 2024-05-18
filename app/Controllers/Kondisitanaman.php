<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use RZCoding\DataTables\DataTable;

use App\Models\KondisitanamanModel;

class Kondisitanaman extends BaseController
{

	protected $kondisitanamanModel;
	protected $validation;

	public function __construct()
	{
		$this->kondisitanamanModel = new KondisitanamanModel();
		$this->validation =  \Config\Services::validation();
	}

	public function index()
	{

		$data = [
			'controller'    	=> ucwords('kondisitanaman'),
			'title'     		=> ucwords('kondisitanaman')
		];

		return view('kondisitanaman', $data);
	}

	public function getAll()
	{		
		$db = db_connect();
		$builder = $db->table('KondisiTanaman')->select('id, RPC, Kondisi, Status, Kebun, KKL_KEBUN, Afd, Tahun_Tanam, No_Blok, Luas_Ha, Jlh_Pokok, Pkk_Ha, Realisasi_Bulan, Realisasi_Tahun, Realisasi, Kriteria');
		return DataTable::of($builder)
		->addNumbering()
		->hide('id')
		->add('action', function($value){
			$ops = '<div class="btn-group text-white">';
			$ops .= '<a class="btn btn-dark" onClick="save(' . $value->id . ')"><i class="fas fa-pencil-alt"></i></a>';
			$ops .= '<a class="btn btn-secondary text-dark" onClick="remove(' . $value->id . ')"><i class="fas fa-trash-alt"></i></a>';
			$ops .= '</div>';
			return $ops;
		}, 'last')
		->toJson();
	}

	public function getOne()
	{
		$response = array();

		$id = $this->request->getPost('id');

		if ($this->validation->check($id, 'required|numeric')) {

			$data = $this->kondisitanamanModel->where('id', $id)->first();

			return $this->response->setJSON($data);
		} else {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}
	}

	public function add()
	{
		$response = array();

		$fields['id'] = $this->request->getPost('id');
		$fields['RPC'] = $this->request->getPost('RPC');
		$fields['Kondisi'] = $this->request->getPost('Kondisi');
		$fields['Status'] = $this->request->getPost('Status');
		$fields['Kebun'] = $this->request->getPost('Kebun');
		$fields['KKL_KEBUN'] = $this->request->getPost('KKL_KEBUN');
		$fields['Afd'] = $this->request->getPost('Afd');
		$fields['Tahun_Tanam'] = $this->request->getPost('Tahun_Tanam');
		$fields['No_Blok'] = $this->request->getPost('No_Blok');
		$fields['Luas_Ha'] = $this->request->getPost('Luas_Ha');
		$fields['Jlh_Pokok'] = $this->request->getPost('Jlh_Pokok');
		$fields['Pkk_Ha'] = $this->request->getPost('Pkk_Ha');
		$fields['Realisasi_Bulan'] = $this->request->getPost('Realisasi_Bulan');
		$fields['Realisasi_Tahun'] = $this->request->getPost('Realisasi_Tahun');
		$fields['Realisasi'] = $this->request->getPost('Realisasi');
		$fields['Kriteria'] = $this->request->getPost('Kriteria');


		$this->validation->setRules([
			'RPC' => ['label' => 'RPC', 'rules' => 'required|min_length[0]|max_length[255]'],
			'Kondisi' => ['label' => 'Kondisi', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Status' => ['label' => 'Status', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Kebun' => ['label' => 'Kebun', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'KKL_KEBUN' => ['label' => 'KKL KEBUN', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Afd' => ['label' => 'Afd', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Tahun_Tanam' => ['label' => 'Tahun Tanam', 'rules' => 'permit_empty|valid_date|min_length[0]'],
			'No_Blok' => ['label' => 'No Blok', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Luas_Ha' => ['label' => 'Luas Ha', 'rules' => 'permit_empty|min_length[0]|max_length[10]'],
			'Jlh_Pokok' => ['label' => 'Jlh Pokok', 'rules' => 'permit_empty|numeric|min_length[0]'],
			'Pkk_Ha' => ['label' => 'Pkk Ha', 'rules' => 'permit_empty|numeric|min_length[0]'],
			'Realisasi_Bulan' => ['label' => 'Realisasi Bulan', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Realisasi_Tahun' => ['label' => 'Realisasi Tahun', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Realisasi' => ['label' => 'Realisasi', 'rules' => 'required|numeric|min_length[0]'],
			'Kriteria' => ['label' => 'Kriteria', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

		} else {

			if ($this->kondisitanamanModel->insert($fields)) {

				$response['success'] = true;
				$response['messages'] = lang("App.insert-success");
			} else {

				$response['success'] = false;
				$response['messages'] = lang("App.insert-error");
			}
		}

		return $this->response->setJSON($response);
	}

	public function edit()
	{
		$response = array();

		$fields['id'] = $this->request->getPost('id');
		$fields['RPC'] = $this->request->getPost('RPC');
		$fields['Kondisi'] = $this->request->getPost('Kondisi');
		$fields['Status'] = $this->request->getPost('Status');
		$fields['Kebun'] = $this->request->getPost('Kebun');
		$fields['KKL_KEBUN'] = $this->request->getPost('KKL_KEBUN');
		$fields['Afd'] = $this->request->getPost('Afd');
		$fields['Tahun_Tanam'] = $this->request->getPost('Tahun_Tanam');
		$fields['No_Blok'] = $this->request->getPost('No_Blok');
		$fields['Luas_Ha'] = $this->request->getPost('Luas_Ha');
		$fields['Jlh_Pokok'] = $this->request->getPost('Jlh_Pokok');
		$fields['Pkk_Ha'] = $this->request->getPost('Pkk_Ha');
		$fields['Realisasi_Bulan'] = $this->request->getPost('Realisasi_Bulan');
		$fields['Realisasi_Tahun'] = $this->request->getPost('Realisasi_Tahun');
		$fields['Realisasi'] = $this->request->getPost('Realisasi');
		$fields['Kriteria'] = $this->request->getPost('Kriteria');


		$this->validation->setRules([
			'RPC' => ['label' => 'RPC', 'rules' => 'required|min_length[0]|max_length[255]'],
			'Kondisi' => ['label' => 'Kondisi', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Status' => ['label' => 'Status', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Kebun' => ['label' => 'Kebun', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'KKL_KEBUN' => ['label' => 'KKL KEBUN', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Afd' => ['label' => 'Afd', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Tahun_Tanam' => ['label' => 'Tahun Tanam', 'rules' => 'permit_empty|valid_date|min_length[0]'],
			'No_Blok' => ['label' => 'No Blok', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Luas_Ha' => ['label' => 'Luas Ha', 'rules' => 'permit_empty|min_length[0]|max_length[10]'],
			'Jlh_Pokok' => ['label' => 'Jlh Pokok', 'rules' => 'permit_empty|numeric|min_length[0]'],
			'Pkk_Ha' => ['label' => 'Pkk Ha', 'rules' => 'permit_empty|numeric|min_length[0]'],
			'Realisasi_Bulan' => ['label' => 'Realisasi Bulan', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Realisasi_Tahun' => ['label' => 'Realisasi Tahun', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],
			'Realisasi' => ['label' => 'Realisasi', 'rules' => 'required|numeric|min_length[0]'],
			'Kriteria' => ['label' => 'Kriteria', 'rules' => 'permit_empty|min_length[0]|max_length[255]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

		} else {

			if ($this->kondisitanamanModel->update($fields['id'], $fields)) {

				$response['success'] = true;
				$response['messages'] = lang("App.update-success");
			} else {

				$response['success'] = false;
				$response['messages'] = lang("App.update-error");
			}
		}

		return $this->response->setJSON($response);
	}

	public function remove()
	{
		$response = array();

		$id = $this->request->getPost('id');

		if (!$this->validation->check($id, 'required|numeric')) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		} else {

			if ($this->kondisitanamanModel->where('id', $id)->delete()) {

				$response['success'] = true;
				$response['messages'] = lang("App.delete-success");
			} else {

				$response['success'] = false;
				$response['messages'] = lang("App.delete-error");
			}
		}

		return $this->response->setJSON($response);
	}
}

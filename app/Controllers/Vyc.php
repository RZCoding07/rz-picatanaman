<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\VycModel;
use App\Models\RpcModel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpParser\Node\Expr\FuncCall;
use RZCoding\DataTables\DataTable;

class Vyc extends BaseController
{

	protected $vycModel;
	protected $validation;

	public function __construct()
	{
		$this->vycModel = new VycModel();
		$this->validation =  \Config\Services::validation();
	}

	public function index()
	{

		$data = [
			'controller'    	=> ucwords('vyc'),
			'title'     		=> ucwords('VYC'),
			'rpc'				=> (new RpcModel())->select('id, nama_rpc')->findAll()
		];

		return view('vyc', $data);
	}

	public function importData()
	{
		$validation = \Config\Services::validation();
		$valid = $this->validate([
			'fileimport' => [
				'label' => 'Inputan File',
				'rules' => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
				'errors' => [
					'uploaded' => '{field} wajib diisi',
					'ext_in' => '{field} harus ekstensi xls & xlsx'
				]
			]
		]);


		if (!$valid) {
			session()->setFlashdata('error', $validation->getError('fileimport'));
			return redirect()->to('/vyc');
		}

		$ext = $this->request->getFile('fileimport')->getClientExtension();
		if ($ext == 'xls') {
			$render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else {
			$render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}

		$xls = $render->load($this->request->getFile('fileimport'));
		$data = $xls->getActiveSheet()->toArray();
		// Get the VycModel
		$vycModel = new VycModel();
		$rpcModel = new RpcModel();
		$year = $this->request->getPost('tahun');

		if($this->vycModel->where('tahun', $year)->countAllResults() > 0) {
			$this->vycModel->where('tahun', $year)->delete();
		}

		for($i = 2; $i < count($data); $i++) {
			$rpc = $rpcModel->where('nama_rpc', $data[$i][0])->first();
			if ($rpc) {
				for($j = 1; $j < count($data[$i]); $j++) {
					$bulan = $j;
					$nilai_vyc = $data[$i][$j];
					$vycModel->insert([
						'rpc_id' => $rpc->id,
						'nilai_vyc' => $nilai_vyc,
						'bulan' => $bulan,
						'tahun' => $year
					]);
				}
			}
		}

		session()->setFlashdata('success', 'Data berhasil diimport');
		return redirect()->to('/vyc');
	}

	public function getAll()
	{
		$result = $this->vycModel->select('vyc.id, rpc.nama_rpc, vyc.nilai_vyc, vyc.bulan, vyc.tahun')
			->join('rpc', 'rpc.id = vyc.rpc_id');

		return DataTable::of($result)
			->addNumbering()
			->hide('id')
			->add('action', function ($value) {
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

			$data = $this->vycModel->where('id', $id)->first();

			return $this->response->setJSON($data);
		} else {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}
	}

	public function add()
	{
		$response = array();

		$fields['id'] = $this->request->getPost('id');
		$fields['rpc_id'] = $this->request->getPost('rpc_id');
		$fields['nilai_vyc'] = $this->request->getPost('nilai_vyc');
		$fields['bulan'] = $this->request->getPost('bulan');
		$fields['tahun'] = $this->request->getPost('tahun');


		$this->validation->setRules([
			'rpc_id' => ['label' => 'Nama RPC', 'rules' => 'required|numeric|min_length[0]'],
			'nilai_vyc' => ['label' => 'Nilai VYC', 'rules' => 'required|min_length[0]'],
			'bulan' => ['label' => 'Bulan', 'rules' => 'required|numeric|min_length[0]'],
			'tahun' => ['label' => 'Tahun', 'rules' => 'required|numeric|min_length[0]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

		} else {

			if ($this->vycModel->insert($fields)) {

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
		$fields['rpc_id'] = $this->request->getPost('rpc_id');
		$fields['nilai_vyc'] = $this->request->getPost('nilai_vyc');
		$fields['bulan'] = $this->request->getPost('bulan');
		$fields['tahun'] = $this->request->getPost('tahun');


		$this->validation->setRules([
			'rpc_id' => ['label' => 'Nama RPC', 'rules' => 'required|numeric|min_length[0]'],
			'nilai_vyc' => ['label' => 'Nilai VYC', 'rules' => 'required|min_length[0]'],
			'bulan' => ['label' => 'Bulan', 'rules' => 'required|numeric|min_length[0]'],
			'tahun' => ['label' => 'Tahun', 'rules' => 'required|numeric|min_length[0]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

		} else {

			if ($this->vycModel->update($fields['id'], $fields)) {

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

			if ($this->vycModel->where('id', $id)->delete()) {

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

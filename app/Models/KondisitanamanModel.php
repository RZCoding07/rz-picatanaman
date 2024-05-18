<?php
namespace App\Models;
use CodeIgniter\Model;

class KondisitanamanModel extends Model {
    
	protected $table = 'kondisitanaman';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['RPC', 'Kondisi', 'Status', 'Kebun', 'KKL_KEBUN', 'Afd', 'Tahun_Tanam', 'No_Blok', 'Luas_Ha', 'Jlh_Pokok', 'Pkk_Ha', 'Realisasi_Bulan', 'Realisasi_Tahun', 'Realisasi', 'Kriteria'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}
<?php
namespace App\Models;
use CodeIgniter\Model;

class VycModel extends Model {
    
	protected $table = 'vyc';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['rpc_id', 'nilai_vyc', 'bulan', 'tahun'];
	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}
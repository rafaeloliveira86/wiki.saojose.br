<?php
namespace App\Models\Units;

use CodeIgniter\Model;

class UnitsModel extends Model {
    protected $DBGroup              = 'default';
    protected $table                = 'tbl_units';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'id',
        'unit_nickname',
		'unit_name',
        'slug',
        'class',
        'logo_navbar',
        'logo_footer',
        'icon_footer',
        'site',
		'id_status',
		'id_user_created',
		'id_user_updated',
		'id_user_deleted',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'projectName',
        'category',
        'description',
        'startDate',
        'deadline',
        'budget',
        'payment'
    ];

    public function insertProject($data)
    {
        return $this->insert($data);
    }
}

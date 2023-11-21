<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id_role';

    public function getRole()
    {
        return $this->db->table('role')
            ->select('id_role, nama_role')
            ->get()
            ->getResultArray();
    }

    // Method to insert data into the 'user' tabl
}

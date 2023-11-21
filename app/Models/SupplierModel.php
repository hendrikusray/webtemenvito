<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';

    public function insertSupplier($data)
    {
        $this->db->table('supplier')->insert($data);
        return $this->db->insertID();
    }

    public function supplierList()
    {
        return $this->db->table('supplier')
        ->select('*')
        ->get()
        ->getResultArray();
    }

    public function deleteSupplier($id)
    {
        return $this->db->table('supplier')->where('id_supplier', $id)->delete();
    }
}

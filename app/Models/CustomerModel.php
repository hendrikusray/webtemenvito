<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id_customers';

    public function insertUser($data)
    {
        $this->db->table('customers')->insert($data);
        return $this->db->insertID();
    }

    public function getCustomer()
    {
        return $this->db->table('customers')
        ->select('id_customers, nama, no_telp, alamat, email, email, is_active')
        ->get()
        ->getResultArray();
    }

    public function deleteCustomer($id)
    {
        return $this->db->table('customers')->where('id_customers', $id)->delete();
    }
}

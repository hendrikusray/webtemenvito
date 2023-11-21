<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    public function insertTransaksi($data)
    {
        $this->db->table('transaksi')->insert($data);
        return $this->db->insertID();
    }


    public function transaksiList()
    {
        return $this->db->table('transaksi')
        ->select('*')
        ->get()
        ->getResultArray();
    }

    public function deleteSupplier($id)
    {
        return $this->db->table('supplier')->where('id_supplier', $id)->delete();
    }
}

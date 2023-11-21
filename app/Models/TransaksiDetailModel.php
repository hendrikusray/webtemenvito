<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiDetailModel extends Model
{
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id_detail_transaksi';

    public function insertTransaksiDetail($data)
    {
        $this->db->table('detail_transaksi')->insert($data);
        return $this->db->insertID();
    }

    public function getTransactionDetails($id)
    {
        return $this->db->table('detail_transaksi')
            ->select('*')
            ->where('id_transaksi', $id)
            ->get()
            ->getResultArray();
    }
}

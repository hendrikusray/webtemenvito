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


    public function transaksiList($status)
    {
        return $this->db->table('transaksi')
            ->select('*')
            ->where('type', $status)
            ->get()
            ->getResultArray();
    }

    public function deleteSupplier($id)
    {
        return $this->db->table('supplier')->where('id_supplier', $id)->delete();
    }

    public function reportTransaksi($tahun)
    {
        return $this->db->table('transaksi as s')
            ->select('MONTH(s.tanggal_transaksi) month, SUM(s.total_harga) total')
            // ->join('sale s', 'sale_id')
            ->where('YEAR(s.tanggal_transaksi)', $tahun)
            ->where('type', 2)
            ->groupBy('MONTH(s.tanggal_transaksi)')
            ->orderBy('MONTH(s.tanggal_transaksi)')
            ->get()->getResultArray();
    }

    public function reportCustomer($tahun)
    {
        return $this->db->table('customers')
            ->select('MONTH(created_at) month, COUNT(*) total')
            ->where('YEAR(created_at)', $tahun)
            ->groupBy('MONTH(created_at)')
            ->orderBy('MONTH(created_at)')
            ->get()->getResultArray();
    }

    public function reportPembelian($tahun)
    {
        return $this->db->table('transaksi as s')
            ->select('MONTH(s.tanggal_transaksi) month, SUM(s.total_harga) total')
            // ->join('sale s', 'sale_id')
            ->where('YEAR(s.tanggal_transaksi)', $tahun)
            ->where('type', 1)
            ->groupBy('MONTH(s.tanggal_transaksi)')
            ->orderBy('MONTH(s.tanggal_transaksi)')
            ->get()->getResultArray();
    }

    public function reportSupplier($tahun)
    {
        return $this->db->table('supplier')
            ->select('MONTH(created_at) month, COUNT(*) total')
            ->where('YEAR(created_at)', $tahun)
            ->groupBy('MONTH(created_at)')
            ->orderBy('MONTH(created_at)')
            ->get()->getResultArray();
    }

    public function getReportPenjualan($tgl_awal, $tgl_akhir)
    {
        $variable = $this->db->table('transaksi s')
            ->select('s.id_transaksi,s.customer_name,s.tanggal_transaksi tgl_transaksi, s.customer_id user_id, 
        SUM(s.total_harga) total')
            ->where('date(s.tanggal_transaksi) >=', $tgl_awal)
            ->where('date(s.tanggal_transaksi) <= ', $tgl_akhir)
            ->where('s.type', 2)
            ->groupBy('s.id_transaksi')
            ->get()->getResultArray();

            // var_dump($this->db->getLastQuery());

        return $variable;
    }

    public function getReportPembelian($tgl_awal, $tgl_akhir)
    {
        $variable = $this->db->table('transaksi s')
            ->select('s.id_transaksi,s.supplier_name,s.tanggal_transaksi tgl_transaksi, s.supplier_id user_id, 
        SUM(s.total_harga) total')
            ->where('date(s.tanggal_transaksi) >=', $tgl_awal)
            ->where('date(s.tanggal_transaksi) <= ', $tgl_akhir)
            ->where('s.type', 1)
            ->groupBy('s.id_transaksi')
            ->get()->getResultArray();

            // var_dump($this->db->getLastQuery());

        return $variable;
    }
}

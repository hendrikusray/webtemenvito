<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_product';

    public function getLayanan()
    {
        return $this->db->table('product')
            ->select('id_product, nama_product, harga_product, type, stock, gambar_product, diskon, jenis_product')
            ->where('type', 1) // Menambahkan klausa where
            ->get()
            ->getResultArray();
    }

    public function getBarang()
    {
        return $this->db->table('product')
            ->select('id_product, nama_product, harga_product, type, stock, gambar_product, diskon, jenis_product')
            ->where('type', 2) // Menambahkan klausa where
            ->get()
            ->getResultArray();
    }

    // Method to insert data into the 'user' table
    public function insertLayanan($data)
    {
        return $this->db->table('product')->insert($data);
    }

    public function deleteLayanan($id)
    {
        return $this->db->table('product')->where('id_product', $id)->delete();
    }
}

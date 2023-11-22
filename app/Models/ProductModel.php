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
        $data = $this->db->table('product')
            ->select('product.id_product, product.nama_product, product.harga_product, product.type, product.stock, product.gambar_product, product.diskon, product.jenis_product, supplier.nama, supplier.id_supplier')
            ->join('supplier', 'product.supplier_id = supplier.id_supplier')
            ->where('type', 2) // Menambahkan klausa where
            ->get()
            ->getResultArray();

        return $data;
    }

    public function getProductsBySupplierId($supplierId)
    {
        return $this->db->table('product')
            ->where(['type' => 2, 'supplier_id' => $supplierId])
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

    public function getCurrentStock($id_produk)
    {
        $query = $this->db->table('product')
            ->select('stock')
            ->where('id_product', $id_produk)
            ->get();

        $result = $query->getRow();

        return $result ? $result->stock : 0;
    }

    public function updateStock($id_produk, $newStock)
    {
        $this->db->table('product')
            ->where('id_product', $id_produk)
            ->update(['stock' => $newStock]);
    }

    public function getAllProduct($status)
    {
        $query = $this->db->table('product')->where('type', $status)->get();
        return $query->getResult();
    }
}

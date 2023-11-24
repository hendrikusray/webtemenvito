<?php

namespace App\Controllers;

use App\Models\SupplierModel;
use CodeIgniter\API\ResponseTrait;


class Transaksi extends BaseController
{
    use ResponseTrait;
    public function submitTransaction()
    {
        $jsonRequest = $this->request->getJSON();

        // Validate if JSON data is provided
        if (!$jsonRequest) {
            return $this->fail('No JSON data provided.', 400);
        }

        $total_pembayaran = $jsonRequest->total_pembayaran;
        $total_jumlah = $jsonRequest->total_jumlah;
        $supplier_name = $jsonRequest->supplier_name;
        $supplier_id = $jsonRequest->supplier_id;
        $nominal_bayar = $jsonRequest->nominal_bayar;
        $kembalian = $jsonRequest->kembalian;
        $list_data = $jsonRequest->list_data;

        // Insert into 'your_table_transaksi' table
        $transaksiData = [
            'total_harga' => $total_pembayaran,
            'jumlah_barang' => $total_jumlah,
            'supplier_name' => $supplier_name,
            'supplier_id' => $supplier_id,
            'nominal_bayar' => $nominal_bayar,
            'kembalian' => $kembalian,
            'type' => 1,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ];

        $transaksiModel = new \App\Models\TransaksiModel();
        $produkModel = new \App\Models\ProductModel();
        $transaksiId = $transaksiModel->insertTransaksi($transaksiData);

        $transaksiDetailModel = new \App\Models\TransaksiDetailModel();

        foreach ($list_data as $data) {
            $detailData = [
                'id_transaksi' => $transaksiId,
                'id_produk' => $data->id_produk,
                'jumlah_barang' => $data->jumlah_barang,
                'total' => $data->total,
                'nama_produk' => $data->produk,
                // Add other fields as needed
            ];

            $currentStock = $produkModel->getCurrentStock($data->id_produk);
            $newStock = $currentStock + $data->jumlah_barang;
            $produkModel->updateStock($data->id_produk, $newStock);
            $transaksiDetailModel->insertTransaksiDetail($detailData);
        }

        return $this->respond(['message' => 'Transaction submitted successfully']);
    }

    public function submitTransactionPenjualan()
    {
        $jsonRequest = $this->request->getJSON();

        // Validate if JSON data is provided
        if (!$jsonRequest) {
            return $this->fail('No JSON data provided.', 400);
        }

        $total_pembayaran = $jsonRequest->total_pembayaran;
        $total_jumlah = $jsonRequest->total_jumlah;
        $customer_id = $jsonRequest->customer_id;
        $nominal_bayar = $jsonRequest->nominal_bayar;
        $customer_name = $jsonRequest->customer_name;
        $kembalian = $jsonRequest->kembalian;
        $list_data = $jsonRequest->list_data;

        // Insert into 'your_table_transaksi' table
        $transaksiData = [
            'total_harga' => $total_pembayaran,
            'jumlah_barang' => $total_jumlah,
            'type' => 2,
            'customer_id' => $customer_id,
            'nominal_bayar' => $nominal_bayar,
            'kembalian' => $kembalian,
            'customer_name' => $customer_name,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ];

        $transaksiModel = new \App\Models\TransaksiModel();
        $produkModel = new \App\Models\ProductModel();
        $transaksiId = $transaksiModel->insertTransaksi($transaksiData);

        $transaksiDetailModel = new \App\Models\TransaksiDetailModel();

        foreach ($list_data as $data) {
            $detailData = [
                'id_transaksi' => $transaksiId,
                'id_produk' => $data->id_produk,
                'nama_produk' => $data->produk,
                'jumlah_barang' => $data->jumlah_barang,
                'total' => $data->total,
                // Add other fields as needed
            ];

            $currentStock = $produkModel->getCurrentStock($data->id_produk);
            $newStock = $currentStock - $data->jumlah_barang;
            $produkModel->updateStock($data->id_produk, $newStock);
            $transaksiDetailModel->insertTransaksiDetail($detailData);
        }

        return $this->respond(['message' => 'Transaction submitted successfully']);
    }

    public function transaksiDetail()
    {
        $id_transaksi = $this->request->getVar('id_transaksi');

        $transaksiModel = new \App\Models\TransaksiDetailModel();
        $details = $transaksiModel->getTransactionDetails($id_transaksi);

        return $this->response->setJSON($details);
    }
}

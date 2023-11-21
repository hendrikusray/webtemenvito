<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index(): string
    {
        return view('page/index');
    }

    public function postProduk()
    {
        $request = service('request');

        // Retrieve form data
        $nama_produk = $request->getPost('nama_produk');
        $jenis_produk = $request->getPost('jenis_produk');
        $harga_produk = $request->getPost('harga_produk');
        $jumlah_stok = $request->getPost('jumlah_stok');
        $type = $request->getPost('type');
        $diskon = $request->getPost('diskon');

        // Handle file upload
        $foto = $this->request->getFile('foto');
        $fotoName = '';

        if ($foto->isValid() && !$foto->hasMoved()) {
            $fotoName = $foto->getRandomName();
            $foto->move('../writable/uploads', $fotoName); // Adjust the upload directory as needed
        }

        // Insert data into the "produk" table using the model
        $db = \Config\Database::connect();
        $builder = $db->table('product'); // Adjust the table name if needed

        $data = [
            'nama_product' => $nama_produk,
            'type' => $type,
            'harga_product' => $harga_produk,
            'stock' => $jumlah_stok,
            'diskon' => $diskon,
            'gambar_product' => $fotoName,
            'jenis_product' => $jenis_produk
        ];

        $builder->insert($data);
        // Return a JSON response (you might want to customize this based on your needs)
        return $this->response->setJSON(['success' => true, 'message' => 'Product successfully added']);
    }

    public function delete()
    {
        if ($this->request->isAJAX()) {
            $rawInput = $this->request->getRawInput();

            // Check if it's a JSON string or an array
            $input = is_array($rawInput) ? $rawInput : json_decode($rawInput, true);


            // Ensure that $input is an array and contains 'id' key
            if (is_array($input) && array_key_exists('id', $input)) {
                $id_layanan = $input['id'];

                $categoryModel = new ProductModel();
                $result = $categoryModel->deleteLayanan($id_layanan);

                if ($result) {
                    // Return a JSON response for success
                    return $this->response->setJSON(['success' => true]);
                } else {
                    // Return a JSON response for failure
                    return $this->response->setJSON(['success' => false, 'error' => 'Failed to delete layanan']);
                }
            } else {
                // Handle the case where 'id' is not present in the input
                return $this->response->setJSON(['success' => false, 'error' => 'Invalid input data']);
            }
        } else {
            // Method not allowed for non-AJAX requests
            return $this->response->setStatusCode(405)->setJSON(['error' => 'Method not allowed']);
        }
    }

    public function updateLayanan()
    {
        $request = service('request');

        // Retrieve form data
        $nama_produk = $request->getPost('nama_produk');
        $jenis_produk = $request->getPost('jenis_produk');
        $harga_produk = $request->getPost('harga_produk');
        $diskon = $request->getPost('diskon');
        $jumlah_stok = $request->getPost('jumlah_stok');

        // Handle file upload
        $foto = $this->request->getFile('foto');
        $produkid = $this->request->getPost('id_produk');


        $fotoName = '';

        if ($foto->isValid() && !$foto->hasMoved()) {
            $fotoName = $foto->getRandomName();
            $foto->move('../writable/uploads', $fotoName); // Adjust the upload directory as needed
        }

        // Update data in the "produk" table using the model
        $db = \Config\Database::connect();
        $builder = $db->table('product'); // Adjust the table name if needed

        $data = [
            'nama_product' => $nama_produk,
            'jenis_product' => $jenis_produk,
            'harga_product' => $harga_produk,
            'stock' => $jumlah_stok,
            'diskon' => $diskon,
        ];

        // Check if a new photo is uploaded
        if (!empty($fotoName)) {
            $data['gambar_product'] = $fotoName;
        }

        $builder->where('id_product', $produkid); // Assuming 'id' is the primary key
        $builder->update($data);

        // Return a JSON response (you might want to customize this based on your needs)
        return $this->response->setJSON(['success' => true, 'message' => 'Product successfully updated']);
    }
}

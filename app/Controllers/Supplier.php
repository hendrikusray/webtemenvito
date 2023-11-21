<?php

namespace App\Controllers;

use App\Models\SupplierModel;

class Supplier extends BaseController
{

    public function createSupplier()
    {
        if ($this->request->isAJAX()) {
            $nama = $this->request->getPost('nama');
            $alamat_supplier = $this->request->getPost('alamat');
            $no_hp = $this->request->getPost('no_hp');
            $supplierModel = new SupplierModel();
            $data = [
                'nama' => $nama,
                'alamat_supplier' => $alamat_supplier,
                'no_telp_supplier' => $no_hp,
            ];
            
            $insertedId = $supplierModel->insertSupplier($data);

            if ($insertedId) {
                return $this->response->setJSON(['success' => true, 'inserted_id' => $insertedId]);
            } else {
                return $this->response->setJSON(['success' => false, 'error' => 'Failed to insert user']);
            }
        } else {
            return $this->response->setStatusCode(405)->setJSON(['error' => 'Method not allowed']);
        }
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

                $categoryModel = new SupplierModel();
                $result = $categoryModel->deleteSupplier($id_layanan);

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

    public function update()
    {
        $request = service('request');

        // Retrieve form data
        $nama = $request->getPost('nama');
        $alamat_supplier = $request->getPost('alamat');
        $no_hp = $request->getPost('no_hp');
        $id_supplier = $request->getPost('id_supplier');

        // Update data in the "produk" table using the model
        $db = \Config\Database::connect();
        $builder = $db->table('supplier'); // Adjust the table name if needed

        $data = [
            'nama' => $nama,
            'alamat_supplier' => $alamat_supplier,
            'no_telp_supplier' => $no_hp,
        ];

        $builder->where('id_supplier', $id_supplier); // Assuming 'id' is the primary key
        $builder->update($data);

        // Return a JSON response (you might want to customize this based on your needs)
        return $this->response->setJSON(['success' => true, 'message' => 'Supplier successfully updated']);
    }
}

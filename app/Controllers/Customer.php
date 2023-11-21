<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    public function index(): string
    {
        return view('page/customer');
    }

    public function addCustomers()
    {
        $request = service('request');

        // Retrieve form data
        $nama = $request->getPost('name_customer');
        $no_telp = $request->getPost('no_telp_customer');
        $alamat = $request->getPost('alamat_customer');
        $email = $request->getPost('email_customer');
        $status_customer = $request->getPost('status_customer');

        // Insert data into the "produk" table using the model
        $db = \Config\Database::connect();
        $builder = $db->table('customers'); // Adjust the table name if needed

        $data = [
            'nama' => $nama,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'email' => $email,
            'is_active' => $status_customer,
        ];

        $builder->insert($data);
        // Return a JSON response (you might want to customize this based on your needs)
        return $this->response->setJSON(['success' => true, 'message' => 'customers successfully added']);
    }

    public function delete()
    {
        if ($this->request->isAJAX()) {
            $rawInput = $this->request->getRawInput();

            // Check if it's a JSON string or an array
            $input = is_array($rawInput) ? $rawInput : json_decode($rawInput, true);


            // Ensure that $input is an array and contains 'id' key
            if (is_array($input) && array_key_exists('id', $input)) {
                $id_customers = $input['id'];

                $customersModel = new CustomerModel();
                $result = $customersModel->deleteCustomer($id_customers);

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

    public function updatedCustomers()
    {
        $request = service('request');

        // Retrieve form data
        $name_customer = $request->getPost('name_customer');
        $no_telp_customer = $request->getPost('no_telp_customer');
        $alamat = $request->getPost('alamat_customer');
        $email = $request->getPost('email_customer');
        $status_customer = $request->getPost('status_customer');

        // Handle file upload
        $id_customers = $this->request->getPost('id_customers');

        // Update data in the "produk" table using the model
        $db = \Config\Database::connect();
        $builder = $db->table('customers'); // Adjust the table name if needed

        $data = [
            'nama' => $name_customer,
            'no_telp' => $no_telp_customer,
            'alamat' => $alamat,
            'email' => $email,
            'is_active' => $status_customer,
        ];

        $builder->where('id_customers', $id_customers); // Assuming 'id' is the primary key
        $builder->update($data);

        // Return a JSON response (you might want to customize this based on your needs)
        return $this->response->setJSON(['success' => true, 'message' => 'Customers successfully updated']);
    }
}

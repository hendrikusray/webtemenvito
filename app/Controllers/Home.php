<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CustomerModel;
use App\Models\UsersModel;
use App\Models\RoleModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login/index');
    }

    public function register(): string
    {
        return view('register/index');
    }

    public function forgot(): string
    {
        return view('login/forgot');
    }

    public function dashboard(): string
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getLayanan(); // Assuming you have a method like getAllProducts() in your model
        return view('page/index', $data);
    }

    public function product(): string
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getBarang(); // Assuming you have a method like getAllProducts() in your model
        return view('page/product', $data);
    }

    public function customer(): string
    {
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->getCustomer();
        return view('page/customer', $data);
    }

    public function users(): string
    {
        $customerModel = new UsersModel();
        $roleModel = new RoleModel();        
        $data['users'] = $customerModel->joinListUsersWithRole();
        $data['roles'] =  $roleModel->getRole();
        return view('page/users', $data);
    }
}

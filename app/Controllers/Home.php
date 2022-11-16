<?php

namespace App\Controllers;

use App\Models\Productmodal;

class Home extends BaseController
{
    public $registermodal;

    public function __construct()
    {
        $this->productmodal = new Productmodal();
    }

    // Loading Homepage with products
    public function index()
    {
        $data['prodata'] = $this->productmodal->getData();

        return view('home', $data);
    }

    // Loading view of Add Product Page
    public function add()
    {
        return view('addproduct');
    }

    // Logic Submitting a product
    public function addproduct()
    {
        $request = \Config\Services::request();

        $insData = [
            'product_name' => $request->getVar('product_name'),
            'product_price' => $request->getVar('product_price'),
            'product_category' => $request->getVar('product_category')
        ];

        if ($this->productmodal->insertData($insData)) {
            $this->session->setTempdata('msg', 'Product Added Successfully', 300);
            return redirect()->to('add');
        } else {

            $this->session->setTempdata('msg', 'Product Addition Failed', 300);
            return redirect()->to('add');
        }
    }

    // Loading a Update Product page with product details
    public function updateproduct($id)
    {
        $data['product'] = $this->productmodal->singleData($id);
        return view('updateproduct', $data);
    }

    // Updating product
    public function updating()
    {
        $request = \Config\Services::request();

        $upData = [
            'product_name' => $request->getVar('product_name'),
            'product_price' => $request->getVar('product_price'),
            'product_category' => $request->getVar('product_category')
        ];

        $upid = $request->getVar('upid');

        if ($this->productmodal->updateData($upid, $upData)) {
            $this->session->setTempdata('msg', 'Product Updated Successfully', 5);
            return redirect()->to('/');
        } else {
            $this->session->setTempdata('msg', 'Product Updation Failed', 5);
            return redirect()->to('/');
        }
    }


    // Delete a Product
    public function deleteproduct($id)
    {
        if ($this->productmodal->deleteData($id)) {
            $this->session->setTempdata('msg', 'Product Removed Successfully', 5);
            return redirect()->to('/');
        } else {
            $this->session->setTempdata('msg', 'Product Removal Failed', 5);
            return redirect()->to('/');
        }
    }
}

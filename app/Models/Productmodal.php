<?php

namespace App\Models;

use CodeIgniter\Model;

class Productmodal extends Model
{
  public $db;

  public function __construct()
  {
    $this->db = \Config\Database::connect();
  }

  // Fetching All Data
  public function getData()
  {
    $builder = $this->db->table('products');
    $query   = $builder->get();

    return $query->getResult();
  }

  // Inserting Data
  public function insertData($data)
  {
    $builder = $this->db->table('products');
    $result = $builder->insert($data);
    return $result;
  }

  // Fetching Single Product Data
  public function singleData($id)
  {
    $builder = $this->db->table('products')->where('id', $id);
    $query = $builder->get();

    return $query->getResult();
  }

  // Updating Product Data based on its id
  public function updateData($id, $data)
  {
    $builder = $this->db->table('products')->where('id', $id);
    $result = $builder->update($data);

    return $result;
  }

  // Deleting Data
  public function deleteData($id)
  {
    $builder = $this->db->table('products')->where('id', $id);
    $result = $builder->delete();

    return $result;
  }
}

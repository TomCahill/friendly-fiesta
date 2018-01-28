<?php  
 
namespace Invoice\Controllers; 
 
use \Invoice\Models\Customer; 
 
class CustomerController { 
 
  public function __construct($c) { 
    
  }

  public function getAll($req, $res) {
    $data = Customer::all();

    return $res->WithJson($data);
  }

  public function get($req, $res, $args) {
    $id = (int) $args['id'];

    $customer = Customer::find($id);
    
    return $res->WithJson($customer);
  }

  public function create($req, $res) {
    $customer = Customer::create(array(
      'name' => 'Test Customer',
      'address_id' => 1
    ));
    
    return $res->WithJson($customer);
  }

  public function update($req, $res) {
    $data = [];
    
    return $res->WithJson($data);
  }


}
<?php  
 
namespace Invoice\Controllers; 
 
use \Invoice\Models\Invoice; 
 
class InvoiceController { 
 
  public function __construct($c) { 
    
  }

  public function getAll($req, $res) {
    $data = Invoice::all();

    return $res->WithJson($data);
  }

  public function get($req, $res, $args) {
    $id = (int) $args['id'];

    $invoice = Invoice::find($id);
    
    return $res->WithJson($invoice);
  }

  public function create($req, $res) {
    $invoice = Invoice::create(array(
      'customer_id' => 1,
      'address_id' => 1,
      'amount' => 5.99,
      'due_at' => 1,
      'tax_rate' => 0.25,
      'customer_id' => 1,
    ));
    
    return $res->WithJson($invoice);
  }

  public function update($req, $res) {
    $data = [];
    
    return $res->WithJson($data);
  }


}
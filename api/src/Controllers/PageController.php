<?php 

namespace Invoice\Controllers;

use \Invoice\Models\Invoice;

class PageController {
  public function index($req, $res) {
    $invoices = invoice::all();

    foreach($invoices as $invoice) {
      var_dump($invoice->name);
    }
  }
}
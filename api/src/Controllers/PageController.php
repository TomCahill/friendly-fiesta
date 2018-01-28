<?php 

namespace Invoice\Controllers;

use \Invoice\Models\Invoice;

class PageController {

  protected $view;

  public function __construct($c) {

  }

  public function index($req, $res) {
    $data = ['data' => 'test'];

    return $res->WithJson($data, 404);
  }
}
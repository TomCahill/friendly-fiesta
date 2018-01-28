<?php 

namespace Invoice\Controllers;

use \Invoice\Models\Invoice;

class PageController {

  protected $view;

  public function __construct($c) {
    $this->view = $c->view;
  }

  public function index($req, $res) {
    return $this->view->render($res, 'index.twig');
  }
}
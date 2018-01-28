<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->group('/invoice', function(){
  $this->get('', 'InvoiceController:getAll');
  $this->post('', 'InvoiceController:create');

  $this->get('/{id:[0-9]+}', 'InvoiceController:get');
  $this->post('/{id:[0-9]+}', 'InvoiceController:update');
});


$app->group('/customer', function(){
  $this->get('', 'CustomerController:getAll');
  $this->post('', 'CustomerController:create');

  $this->get('/{id:[0-9]+}', 'CustomerController:get');
  $this->post('/{id:[0-9]+}', 'CustomerController:update');
});
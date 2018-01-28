<?php

namespace Invoice\Models;

use \Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

  protected $table = 'invoice';

  protected $fillable = [
    'customer_id',
    'address_id',
    'amount',
    'due_at',
    'tax_rate',
    'customer_id'
  ];

}
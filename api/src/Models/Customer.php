<?php

namespace Invoice\Models;

use \Illuminate\Database\Eloquent\Model;

class Customer extends Model {

  protected $table = 'customers';

  protected $fillable = [
    'name',
    'address_id'
  ];

}
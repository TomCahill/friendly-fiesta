<?php

namespace Invoice\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

  protected $table = 'invoice';

  protected $fillable = [];

  public $timestamps = 'false';
  
}
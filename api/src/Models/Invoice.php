<?php

namespace invoice\models;
use illuminate\database\Eloquent\Model;

class Invoice extends Model{
  protected $table = 'invoice';
  protected $fillable = [];
  public $timestamps = 'false';
}
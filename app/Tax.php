<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    // Table name
    protected $table = 'tax';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}

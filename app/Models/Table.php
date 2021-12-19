<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
    ];
}

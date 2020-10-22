<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'items';

    protected $fillable = [
        'name',
        'column',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListData extends Model
{
    // use HasFactory;
    // protected $table = ('listdatas');
    protected $fillable = (['id', 'nama', 'email', 'status']);
}

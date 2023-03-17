<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListData extends Model
{
    use HasFactory;
    protected $table = ('listdata');
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'email', 'status', 'password'];
}

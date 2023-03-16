<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailData extends Model
{
    use HasFactory;
    protected $table = ('detaildata');
    protected $guarded = ('id');
}

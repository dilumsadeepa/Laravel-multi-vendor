<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =['pname','pimg','pprice','pdis','pshort','pshopid','pcatid','dop','pqun'];
}

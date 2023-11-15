<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    use HasFactory;

    protected $table = "basicinfo";
    protected $primaryKey = "id";


    protected $fillable = ['email',  'addredd','phone','footer_des','link'];
   
}


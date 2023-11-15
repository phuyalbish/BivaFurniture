<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";


    protected $fillable = ['name', 'pro_des','image_path','price','material','branch_id', 'totalsale'];
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function joinCategory()
    {
        return $this->join('branches', 'products.branch_id', '=', 'branches.id');
    }
}

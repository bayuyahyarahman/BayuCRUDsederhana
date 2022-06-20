<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'category_id'];

     // relasi table dari product dengan category_id(foreign_key)
     public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

}

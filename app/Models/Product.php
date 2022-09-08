<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable =['details','image','category_id','comment'];
    

    public function tags(){
        return $this->hasMany(related:'App\Models\Tag',foreignKey:'product_id',localKey:'id');
    }

    public function category(){
        return $this->belongsTo(related:'App\Models\Category');
    }
}


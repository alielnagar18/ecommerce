<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $fillable =['details','image'];


    public function product(){
        
        return $this->hasOne(related:'App\Models\Product');
    }
}

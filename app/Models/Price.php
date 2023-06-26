<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    function getCategory(){
        return  $this->hasOne('App\Models\Pricecategory','id','category_id');
     }
}

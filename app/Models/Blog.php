<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    function blogCategory(){
        return  $this->hasOne('App\Models\Category','id','categor_id');
     }
}

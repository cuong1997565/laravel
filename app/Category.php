<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
          protected $table = 'categories';
          protected $casts = ['data' => 'array'];
          protected $fillable = [ 'name','color','data'];
          public $incrementing = false;


          // public function posts()
          //   {
          //       return $this->hasMany('App\Posts');
          //   }


}

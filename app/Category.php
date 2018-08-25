<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
          protected $table = 'categories';
          protected $fillable = [ 'name','color'];
          public $incrementing = false;

          // public function posts()
          //   {
          //       return $this->hasMany('App\Posts');
          //   }


}

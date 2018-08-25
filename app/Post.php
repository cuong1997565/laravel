<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
          protected $table = 'posts';
          public $incrementing = false;
          protected $fillable = ['id','title','content','image','category_id','status','hot','author_id'];
          public function user(){
               return $this->belongsTo('App\User');
          }

          public function category(){

               return $this->belongsTo('App\Category');
          }




}

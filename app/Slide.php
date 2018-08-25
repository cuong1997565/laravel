<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
        protected $table = 'slides';
        protected $fillable = ['image', 'status'];
        public $incrementing = false;
}

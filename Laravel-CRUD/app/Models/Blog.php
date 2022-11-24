<?php

namespace App\Models;

use...

class Blog extends Model
{
  use HasFactory;
  protected $fillable = [
      'title'
      'description'
       'image'
  ];
  public function category(){
      return $this->belorgsTo(Category::class)
  }
}

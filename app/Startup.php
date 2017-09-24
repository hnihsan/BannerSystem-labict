<?php

namespace startup;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
  protected $fillable = [
      'nama', 'expire', 'status', 'filename', 'uploader'
  ];

  public function uploader(){
    $this->belongsTo('startup\users', 'uploader');
  }
}

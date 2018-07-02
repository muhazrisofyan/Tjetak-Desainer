<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design_job extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}

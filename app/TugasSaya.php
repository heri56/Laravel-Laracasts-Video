<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugasSaya extends Model
{
    //
    public function scopeIn($query)
    {
      return $query->where('completed', 0);
    }
}

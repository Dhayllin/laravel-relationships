<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Coutry extends Model
{
    public function location(){
        return $this->hasOne(Location::class);
    }
}

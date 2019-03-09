<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['latitude', 'longitude'];

    public function coutry(){
        return $this->belongsTo(Coutry::class);
    }
}

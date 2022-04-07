<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryRange extends Model
{
    use HasFactory;

    public function job() {
        return $this->hasMany('App\Models\Job');
    }

    public function courier() {
        return $this->hasMany('App\Models\Courier');
    }
}

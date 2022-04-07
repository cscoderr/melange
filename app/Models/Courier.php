<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'sector',
        'position',
        'employment_status',
        'availability',
        'liability_status',
        'smart_phone',
        'forename',
        'surname',
        'dob',
        'uk_citizen',
        'uk_authorized',
        'insurance_number',
        'address',
        'valid_license',
        'passport',
        'driver_license',
        'contact_time',
    ];

    public function delivery_mode()
    {
        return $this->belongsTo('App\Models\DeliveryMode');
    }

    public function delivery_range()
    {
        return $this->belongsTo('App\Models\DeliveryRange');
    }

    public function work_time()
    {
        return $this->belongsTo('App\Models\WorkTime');
    }
}
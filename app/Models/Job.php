<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'hid',
        'user_id',
        'job_title',
        'job_description',
        'sector',
        'location',
        'deadline',
        'language',
        'hour',
        'recruiter_type',
        'contract_type',
        'salary_range',
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

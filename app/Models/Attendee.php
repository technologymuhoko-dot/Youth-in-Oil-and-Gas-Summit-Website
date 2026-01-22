<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Attendee extends Model
{
    //
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'id_passport',
        'email',
        'contact_number',
        'occupation',
        'company',
        'industry',
        'citizenship',
        'region',
        'package',
        'disability',
        'register_datetime',
        'status',
        'payment_status',
        'attendance',
        'ticket_number',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'register_datetime' => 'datetime',
        'attendance' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) Str::uuid();
            }
        });
    }

    // This tells Laravel to find the attendee by 'uuid' instead of 'id' in routes
    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
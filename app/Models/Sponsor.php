<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'gender',
        'id_passport',
        'citizenship',
        'city_town',
        'email',
        'contact_number',
        'occupation',
        'company',
        'company_contact_number',
        'registration_number',
        'website',
        'package',
        'industry',
        'region',
        'register_datetime',
        'status',
        'payment_status',
        'ticket_number',
    ];

    protected $casts = [
        'register_datetime' => 'datetime',
    ];
}
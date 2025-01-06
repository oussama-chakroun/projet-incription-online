<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'convocation_date',
        'start_time',
        'end_time',
        'location',
        'description',
        'status'
    ];

    protected $casts = [
        'convocation_date' => 'date'
    ];
}

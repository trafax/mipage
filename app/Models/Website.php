<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Website extends Model
{
    use HasFactory, SoftDeletes;

    public $connection = 'system';

    public $fillable = [
        'domain',
        'options'
    ];

    public $casts = [
        'options' => 'array'
    ];
}

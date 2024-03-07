<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airport extends Model
{
    protected $table = 'airports';

    protected $fillable = [
        'city',
        'name',
        'iata',
    ];
    use HasFactory;
}

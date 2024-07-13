<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = 'appointments';


    protected $fillable = [
        'climber_name',
        'client_name',
        'client_age',
        'client_location',
        'duration',
        'message',
        
    ];
}

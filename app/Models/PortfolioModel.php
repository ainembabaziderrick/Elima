<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model
{
    use HasFactory;

    protected $table = 'portfolio';


    protected $fillable = [
        'name',
        'age',
        'contact',
        'image',
        'experience',
        'location',
        'about',
        'client_age',
        'client_name',
        'client_contact',
        'duration',
        'client_location',
        'message',
    ];

}

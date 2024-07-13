<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasFactory;

    protected $table = 'test';


    protected $fillable = [
        'name',
        'age',
        'contact',
        'inspiration',
        'memories',
        'skills',
        'preparations',
        'experience',
        'mistakes',
        'handle',
        'challenge',
        'environmental',
        'changes',     
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablefeed extends Model
{
    use HasFactory;

    protected $table = 'table_feeds';
    
    protected $fillable = [
        'name',
        'course',
        'year',
        'content_rating',
        'campus_life_rating',
        'faculty_rating',
        'campus_rating',
        'comments', 
    ];
}

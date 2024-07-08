<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminlog extends Model
{
    protected $fillable = [
    'name',
    'email',
    'password',
];
}

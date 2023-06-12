<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fawad extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'class', 'address'];
}
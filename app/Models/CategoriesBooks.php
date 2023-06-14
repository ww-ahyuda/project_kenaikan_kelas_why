<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesBooks extends Model
{
    use HasFactory;
    protected $table = 'categories_books';
    protected $fillable = ['name'];
    public $timestamps = false;
}

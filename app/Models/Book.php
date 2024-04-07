<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Book extends Model
{
    use HasFactory;


    protected $fillable = [
        'name_book',
        'author_name',
        'editorial_name',
        'number_pages',
        'number_chapters',
        'publication_date',
        'synopsis',
        'available',
    ];
}

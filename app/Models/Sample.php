<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    // Specify the table if it's different from the default 'samples'
    protected $table = 'samples';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'slug',
        'image',
        'title',
        'academic_level',
        'type_of_paper',
        'citation_style',
        'number_of_words',
        'number_of_pages',
    ];

    // If you want to use timestamps, make sure to include these lines
    public $timestamps = true;
}

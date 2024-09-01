<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use HasFactory, SoftDeletes;

    // Specify the table if it's different from the default 'samples'
    protected $table = 'faqs';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'question',
        'answer',
    ];

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

}

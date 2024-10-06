<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    // Specify the table if it's different from the default 'samples'
    protected $table = 'faqs';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'question',
        'answer',
    ];

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

}

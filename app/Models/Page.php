<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Page extends Model
{
    use HasFactory, SoftDeletes;

    // Define the table if different from the default (optional)
    protected $table = 'pages';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'meta_robots',
    ];

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

}

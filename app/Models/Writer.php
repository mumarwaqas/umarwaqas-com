<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Writer extends Model
{
    use HasFactory, SoftDeletes;

    // Specify the table associated with the model
    protected $table = 'writers';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'slug',
        'writer_no',
        'image',
        'name',
        'about',
        'education',
        'experience',
        'rating',
        'reviews',
        'orders',
        'success_rate',
        'competences',
        'online',
    ];

    // Specify any attributes that should be cast to native types
    // protected $casts = [
    //     'rating' => 'decimal:2',
    //     'success_rate' => 'decimal:2',
    //     'online' => 'boolean',
    // ];

    // Optionally, define any relationships, accessors, or mutators

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

}


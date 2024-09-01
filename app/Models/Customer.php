<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'customers';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'customer_no', 
        'image', 
        'name', 
        'about', 
        'rating', 
        'review', 
        'date'
    ];

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

}

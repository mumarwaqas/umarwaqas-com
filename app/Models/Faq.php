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
    protected $fillable = ['question', 'answer', 'user_id'];

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    // Specify any attributes that should be cast to native types
    // protected $casts = [
    //     'rating' => 'decimal:2',
    //     'success_rate' => 'decimal:2',
    //     'online' => 'boolean',
    // ];

    // Optionally, define any relationships, accessors, or mutators

    /**
     * A Order belongs to a user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * A Order belongs to a profile.
     *
     * @return mixed
     */
    public function profile()
    {
        return $this->belongsTo(\App\Models\Profile::class, 'user_id', 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sample extends Model
{
    use HasFactory, SoftDeletes;

    // Specify the table if it's different from the default 'samples'
    protected $table = 'samples';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'slug',
        'image',
        'title',
        'content',
        'academic_level',
        'type_of_paper',
        'citation_style',
        'number_of_words',
        'number_of_pages',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'meta_robots'
    ];

    // If you want to use timestamps, make sure to include these lines
    public $timestamps = true;

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

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

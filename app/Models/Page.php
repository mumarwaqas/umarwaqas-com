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
        'user_id',
        'title',
        'slug',
        'content',
        'page_title',
        'page_type',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'meta_robots',
    ];

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


    /**
     * Page belongs to a Page Meta.
     *
     * @return mixed
     */
    public function pageMeta()
    {
        return $this->hasOne(\App\Models\PageMeta::class, 'page_id', 'id');
    }
}
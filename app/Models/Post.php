<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    // Specify the table if it's different from the default 'contacts'
    protected $table = 'posts';

    protected $fillable = ['user_id','slug', 'title', 'content', 'image', 'category_id'];

    // Define the date format for soft deletes (optional)
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    /**
     * A Post belongs to a Category.
     *
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, "category_id");
    }

    /**
     * A Post belongs to a user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * A Post belongs to a profile.
     *
     * @return mixed
     */
    public function profile()
    {
        return $this->belongsTo(\App\Models\Profile::class, 'user_id', 'user_id');
    }

}



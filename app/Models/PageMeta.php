<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageMeta extends Model
{
    use HasFactory;

    // Define the table if different from the default (optional)
    protected $table = 'page_meta';

    protected $fillable = ['page_id', 'meta_key', 'meta_value'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}

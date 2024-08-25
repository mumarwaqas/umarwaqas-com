<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThemeOption extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'theme_option';

    protected $fillable = [
        'option_key', 
        'option_value',
    ];

    /**
     * Retrieve the option value by option_key.
     *
     * @param string $key
     * @return string|null
     */
    public static function getOptionByKey($key)
    {
        $option = self::where('option_key', $key)->first();
        return $option ? $option->option_value : null;
    }
}

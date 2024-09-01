<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes; // Use the trait here

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Fillable fields for a Order.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'order_no', 'source', 'academic_level', 'subject', 'writer', 
        'topic', 'type_of_paper', 'number_of_words', 'number_of_pages', 
        'citation_style', 'number_of_sources', 'delivery_time', 
        'paper_description', 'order_status', 'payment_status', 'draft_file', 
        'revision_file', 'final_file', 'ai_file', 'plagiarism_file', 
        'grammarly_file', 'attachment', 'coupon_code', 'actual_price', 
        'discounted_price', 'final_price', 'user_ip', 'user_agent'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id'           => 'integer',
        'order_no'          => 'string', 
        'source'            => 'string',
        'academic_level'    => 'string',
        'subject'           => 'string',
        'writer'            => 'string',
        'topic'             => 'string',
        'type_of_paper'     => 'string',
        'number_of_words'   => 'string',
        'number_of_pages'   => 'string',
        'citation_style'    => 'string',
        'number_of_sources' => 'string',
        'delivery_time'     => 'string',
        'paper_description' => 'string',
        'order_status'      => 'string',
        'payment_status'    => 'string',
        'draft_file'        => 'string',
        'revision_file'     => 'string',
        'final_file'        => 'string',
        'ai_file'           => 'string',
        'plagiarism_file'   => 'string',
        'grammarly_file'    => 'string',
        'attachment'        => 'string',
        'coupon_code'       => 'string',
        'actual_price'      => 'string',
        'discounted_price'  => 'string',
        'final_price'       => 'string',
        'user_ip'           => 'string',
        'user_agent'        => 'string',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

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

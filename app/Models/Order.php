<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Order extends Model
{
    /* use HasFactory;

    protected $table = 'order_post';

    protected $fillable = [
        'category_id',
        'post_id', 	
        'position' 	
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    } */
}

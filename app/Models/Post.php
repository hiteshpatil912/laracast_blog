<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

/**
 * Get the post that owns the comment.
 * 
 */
public function user()
{
    return $this->belongsTo(User::class);
}
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];
}

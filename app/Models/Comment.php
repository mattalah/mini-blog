<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    public $timestamps = true;

    protected $fillable = [
        'comment',
        'post_id',
        'user_id',
        'created_at'
    ];

    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the posts that owns the comment.
     */
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}

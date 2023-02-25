<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_id',
      'title',
      'content',
      'photo',
      'author'
    ];

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'user_id',
        'title',
        'content',
        'photo',
        'author',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isLikedBy(User $user)
    {
        $counter = $user->likes
            ->where('post_id', $this->id)
            ->where('like', 1)
            ->count();

        if ($counter === 1) {
            return true;
        }
        return false;
    }

    public function isDislikedBy(User $user)
    {
        $counter = $user->likes
            ->where('post_id', $this->id)
            ->where('like', 0)
            ->count();

        if ($counter === 1) {
            return true;
        }
        return false;
    }
}


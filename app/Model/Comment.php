<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'message',
      'post_id',
      'user_id'
    ];

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'id',
        'message',
        'post_id',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}


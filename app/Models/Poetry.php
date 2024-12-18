<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poetry extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'theme', 'user_id', 'edited_by'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'edited_by');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

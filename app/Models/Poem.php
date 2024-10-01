<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'sinopsis', 'category' ,'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

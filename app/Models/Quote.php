<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'theme', 'name','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

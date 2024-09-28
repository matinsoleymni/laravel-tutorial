<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'status',
        'published_at',
        'user_id'
    ];

    public function writer()
    {
        return $this->belongsTo(User::class , "user_id" , "id");
    }
}

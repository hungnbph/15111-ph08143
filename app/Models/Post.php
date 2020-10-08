<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'desc',
        'content',
        'imgge_url',
        'status',
    ];

    // thể hiện mối quan hệ 1 post sẽ có nhiều comment
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}

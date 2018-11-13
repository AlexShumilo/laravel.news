<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_name', 'user_email', 'comment_theme', 'comment_text', 'news_id', 'checked'
    ];

    public function news()
    {
        return $this->belongsTo('App\News');
    }
}

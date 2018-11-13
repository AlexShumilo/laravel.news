<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $dates = ['created_at'];

    protected $fillable = [
      'news_code', 'news_title', 'news_short_content', 'news_content', 'news_preview', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

}

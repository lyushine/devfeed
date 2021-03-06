<?php

namespace Fedn\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleMeta extends Model
{

    protected $fillable = ['article_id', 'key', 'value'];

    public $timestamps = false;

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}

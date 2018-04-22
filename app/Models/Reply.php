<?php

namespace App\Models;

use \App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Builder;

class Reply extends Model
{

    use Searchable;

    //protected $table = "posts";

    /*
     * 搜索的type
     */
    public function searchableAs()
    {
        return 'post';
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }
    protected $fillable = ['content'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
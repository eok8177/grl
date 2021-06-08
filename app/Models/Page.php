<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
    protected $table = 'pages';

    protected $guarded = [];

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(PageCategory::class, 'category_id');
    }

    public function categories()
    {
        return PageCategory::pluck('title', 'id')->all();
    }

    public function lastPages()
    {
        return Page::where('category_id', $this->category_id)
            ->where('id', '!=', $this->id)
            ->where('published', 1)
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();
    }
}

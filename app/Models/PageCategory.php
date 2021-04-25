<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PageCategory extends Model
{
    protected $table = 'page_categories';

    protected $guarded = [];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'category_id');
    }

    public static function categories()
    {
        return PageCategory::pluck('title', 'id')->all();
    }
}

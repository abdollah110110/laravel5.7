<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model {

    protected $fillable = ['title', 'body', 'category_id'];
    
    use Sluggable;
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function getRouteKeyName() {
        return 'slug';
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

}

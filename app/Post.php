<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeVoted;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model 
{
    use  CanBeVoted;
	use Sluggable;

    //
    protected $fillable = [
        'title', 'body', 'views','meta','image','category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $appends = ['image_path'];
    public function getImagePathAttribute(){
        return asset('uploads/post_images/' . $this->image);
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}

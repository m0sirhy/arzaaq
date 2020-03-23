<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeVoted;

class Post extends Model 
{
    use  CanBeVoted;

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


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title', 'body', 'image','category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $appends = ['image_path'];
    public function getImagePathAttribute(){
        return asset('uploads/post_images/' . $this->image);
    }


}

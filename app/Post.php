<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $fallable=[
        'user_id','category_id','name','slug','excerpt','body','status','file'
        ];

    public function user()
    {
        return $this->belongsTo(User::Tag);
    }
    public function category()
    {
        return $this->belongsTo(Category::Tag);
    }
     
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

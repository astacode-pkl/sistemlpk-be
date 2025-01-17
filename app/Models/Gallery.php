<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id'];
    protected $table = 'galleries';
    protected $with = ['categories'];

    public function categories(){
       return $this->belongsTo(Category::class,'id');
    }
    
    public function getImageUrlAttribute(){
        return asset('stroge/'.$this->image);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $guarded = ['id'];
    protected $table = 'galleries';
    protected $with = ['categories'];

    public function categories() : BelongsTo {
       return $this->belongsTo(Category::class,'category_id');
    }
}

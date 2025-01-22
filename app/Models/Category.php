<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = ['id'];
    
    public function galeries() : HasMany {
        return $this->hasMany(Gallery::class);
    }
}

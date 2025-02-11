<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    protected $table = 'programs';
    
    protected $guarded = ['id'];
    public function benefits(): HasMany
    {
        return $this->hasMany(Benefit::class);
    }
    public function regulations(): HasMany
    {
        return $this->hasMany(Regulation::class);
    }
    
}

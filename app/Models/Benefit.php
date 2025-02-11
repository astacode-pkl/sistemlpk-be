<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Benefit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['programs'];

    public function programs(): BelongsTo
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}

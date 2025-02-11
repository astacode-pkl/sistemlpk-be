<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Regulation extends Model
{
    protected $table = 'regulations';

    protected $guarded = ['id'];

    protected $with=['programs'];

    public function programs(): BelongsTo
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}

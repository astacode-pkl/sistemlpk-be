<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'contacts';
    protected $guarded = ['id'];
}

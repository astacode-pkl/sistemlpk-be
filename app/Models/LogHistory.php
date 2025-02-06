<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LogHistory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function record($action, $description = null)
    {
        self::create([
            'user_id' => Auth::user()->id ,
            'action' => $action,~
            'description' => $description,
        ]);
    }
}

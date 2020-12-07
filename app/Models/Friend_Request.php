<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend_Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender',
        'receiver',
    ];
}

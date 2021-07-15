<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'body',
    ];

    protected $casts = [
        'create_at' => 'Y/m/d',
        'update_at' => 'datetime',
    ];
}

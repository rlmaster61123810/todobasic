<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'task';

    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id',
    ];
}

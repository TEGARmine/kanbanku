<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'task';

    // public function user()
    // {
    //     return $this->hasMany(User::class, 'id');
    // }
}
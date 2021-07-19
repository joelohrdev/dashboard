<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'server_id', 'domain', 'registrar', 'managed', 'expires', 'notes'
    ];
}

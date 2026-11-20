<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'lane', 'type','respawning',])]
class characters extends Model
{
    /** @use HasFactory<\Database\Factories\CharactersFactory> */
    use HasFactory;
}

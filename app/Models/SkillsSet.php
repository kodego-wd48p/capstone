<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsSet extends Model
{
    use HasFactory;
    protected $table = 'skills_sets';
    public $timestamps = false;
}

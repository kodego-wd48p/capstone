<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsPost extends Model
{
    use HasFactory;
    protected $table = 'jobs_posts';
    public $timestamps = false;
}

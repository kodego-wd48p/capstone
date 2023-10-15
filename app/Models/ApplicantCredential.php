<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantCredential extends Model
{
    use HasFactory;
    protected $table = 'applicant_credentials';
    public $timestamps = false;
}

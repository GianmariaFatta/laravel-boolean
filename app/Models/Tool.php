<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'thumb', 'description', 'category', 'release_year', 'latest_version', 'download_link', 'supported_os', 'vote'];
}

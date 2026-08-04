<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VectorStoreFile extends Model
{
    protected $fillable = ['file_path', 'type', 'provider_file_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConseilPratique extends Model
{
    use HasFactory;
    protected $table = 'conseils';
    protected $fillable = [
      'created_at'
  ];
}

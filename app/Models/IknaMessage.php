<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IknaMessage extends Model
{
    use HasFactory;
    protected $table = 'ikna_message';
    protected $fillable = [
      'created_at'
  ];
}

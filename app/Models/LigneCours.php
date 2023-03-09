<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCours extends Model
{
    use HasFactory;
    protected $table = 'lignecours';
    protected $fillable = [
      'created_at'
  ];
  public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}

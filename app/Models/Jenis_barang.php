<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_barang extends Model
{
  use HasFactory;
  public $fillable = ['nama_jenis'];

  public function barang()
  {
    return $this->hasOne(Barang::class);
  }
}

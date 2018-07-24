<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $fillable = [
      'wisata_id',
      'user_id',
      'isi_ulasan'
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

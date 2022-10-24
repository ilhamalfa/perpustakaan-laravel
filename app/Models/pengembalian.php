<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peminjaman(){
        return $this->belongsTo(peminjaman::class);
    }

    public function detail_pengembalian(){
        return $this->hasMany(detail_pengembalian::class);
    }
}

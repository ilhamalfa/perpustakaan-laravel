<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $guarded = ['id'];

    public function siswa(){
        return $this->belongsTo(siswa::class);
    }

    public function petugas(){
        return $this->belongsTo(User::class);
    }

    public function detail_peminjaman(){
        return $this->hasMany(detail_peminjaman::class);
    }

}

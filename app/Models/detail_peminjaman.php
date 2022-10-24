<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_peminjaman extends Model
{
    use HasFactory;

    protected $table = 'detail_peminjaman';

    protected $guarded = ['id'];

    public function buku(){
        return $this->belongsTo(buku::class);
    }
}

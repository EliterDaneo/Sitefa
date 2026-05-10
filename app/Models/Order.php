<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nama',
    'no_hp',
    'email',
    'jenis_layanan',
    'judul',
    'deskripsi',
    'status',
    'catatan_toko',
    'user_id',
])]
class Order extends Model
{
    public function user(){
        $this->belongsTo(User::class);
    }

    public function statusBadge(): string
    {
        return match ($this->status) {
            'pending'     => '<span class="badge bg-warning">Pending</span>',
            'diproses'    => '<span class="badge bg-info">Diproses</span>',
            'selesai'     => '<span class="badge bg-success">Selesai</span>',
            'dibatalkan'  => '<span class="badge bg-danger">Dibatalkan</span>',
            default       => '<span class="badge bg-secondary">-</span>',
        };
    }
}

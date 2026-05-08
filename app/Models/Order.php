<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'email',
        'jenis_layanan',
        'judul',
        'deskripsi',
        'status',
        'catatan_admin',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    // Label status dengan warna badge Bootstrap
    public function statusBadge(): string
    {
        return match ($this->status) {
            'pending'     => '<span class="badge badge-warning">Pending</span>',
            'diproses'    => '<span class="badge badge-info">Diproses</span>',
            'selesai'     => '<span class="badge badge-success">Selesai</span>',
            'dibatalkan'  => '<span class="badge badge-danger">Dibatalkan</span>',
            default       => '<span class="badge badge-secondary">-</span>',
        };
    }
}

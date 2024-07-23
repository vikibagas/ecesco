<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = 'id_pengiriman';
    use HasFactory;

    public function kust(): BelongsTo
    {
        return $this->belongsTo(Kustomer::class, 'id_kustomer', 'id_kustomer');
    }

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service', 'id_pelayanan');
    }

    public function status_kiriman(): BelongsTo
    {
        return $this->belongsTo(AwbStatus::class, 'status', 'id_status');
    }
    public function kurir_pickup(): BelongsTo
    {
        return $this->belongsTo(Cescouser::class, 'pickup_by', 'id_user');
    }
    public function kurir_deliv(): BelongsTo
    {
        return $this->belongsTo(Cescouser::class, 'courier_by', 'id_user');
    }
}


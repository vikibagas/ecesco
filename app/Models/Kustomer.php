<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kustomer extends Model
{
    protected $table = 'kustomer';
    protected $primaryKey = 'id_kustomer';
    use HasFactory;
    public function shipment(): HasMany
    {
        return $this->hasMany(Pengiriman::class, 'id_kustomer', 'id_kustomer');
    }
}

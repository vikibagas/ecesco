<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
   
    protected $table = 'pelayanan';
    protected $primaryKey = 'id_pelayanan';
    use HasFactory;

    public function kiriman(): HasMany
    {
        return $this->hasMany(Pengiriman::class, 'id_pelayanan', 'id_pelayanan');
    }
}

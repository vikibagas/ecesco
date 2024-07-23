<?php

namespace App\Models\Masterdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    protected $table = 'negara';
    protected $primaryKey = 'id_negara';
    use HasFactory;
}

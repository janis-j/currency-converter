<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $primaryKey = 'symbol';

    protected $keyType = 'string';

    protected $fillable = [
        'symbol',
        'rate'
    ];
}

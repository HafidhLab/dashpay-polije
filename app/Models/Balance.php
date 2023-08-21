<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    protected $fillable = [
        'operation_type',
        'target_type',
        'target_id',
        'source_type',
        'source_id',
        'amount'
    ];
}

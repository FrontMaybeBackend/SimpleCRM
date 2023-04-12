<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findorFail($id)
 */
class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'vat',
        'address',
    ];
}

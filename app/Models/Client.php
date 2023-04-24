<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static findorFail($id)
 * @method static create(mixed $validated)
 */
class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'vat',
        'address',
    ];

    public function Clients(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

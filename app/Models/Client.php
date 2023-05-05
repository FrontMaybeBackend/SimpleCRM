<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findorFail($id)
 * @method static create(mixed $validated)
 * @method static paginate(int $int)
 * @method static inRandomOrder()
 * @method static find($assigned_client)
 */
class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'vat',
        'address',
        'project_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

}

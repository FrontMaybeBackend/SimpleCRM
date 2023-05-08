<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(mixed $validated)
 * @method static paginate(int $int)
 * @method static findorfail($id)
 */
class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'deadline',
        'assigned_user',
        'assigned_client',
    ];

    protected static function booted()
    {
        static::created(function ($project) {
            $client = Client::find($project->assigned_client);
            if($client) {
                $client->project_id = $project->id;
                $client->update();
            }
        });
    }



    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function project():HasMany
    {
        return $this->hasMany(Task::class);
    }


    public function projects():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

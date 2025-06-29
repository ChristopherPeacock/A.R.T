<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EditPage extends Model
{
    protected $fillable = [
        'team_id',
        'slug',
        'title',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}

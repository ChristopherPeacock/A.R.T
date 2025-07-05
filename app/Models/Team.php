<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\EditPage;
use App\Models\Contact;


class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function editPages(): HasOne
    {
        return $this->hasOne(EditPage::class);
    }

    public function contact(): HasMany
    {
        return $this->hasMany(Contact::class);
    }


}

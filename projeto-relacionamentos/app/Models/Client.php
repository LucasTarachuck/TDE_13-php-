<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use Illuminate\Database\Eloquent\Relations\HasMany;

$clients = Project::find(1)->clients;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone'
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}


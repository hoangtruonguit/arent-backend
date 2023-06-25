<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{

    protected $hidden = [
        'user_id'
    ];

    protected $with = ['meal'];

    /**
     * Get the post that owns the comment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function meal(): HasMany
    {
        return $this->hasMany(Meal::class);
    }
}

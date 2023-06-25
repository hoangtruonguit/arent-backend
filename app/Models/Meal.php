<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meal extends Model
{
    protected $hidden = [
        'plan_id'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

}

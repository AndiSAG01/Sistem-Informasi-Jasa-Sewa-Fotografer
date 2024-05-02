<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personal extends Model
{
    use HasFactory;
protected $table = 'personals';
    protected $fillable = [
        'basics_id',
        'description',
        'price',
    ];

    /**
     * Get the basic that owns the Wedding
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function basic(): BelongsTo
    {
        return $this->belongsTo(Basic::class, 'basics_id');
    }

    public function personals(): HasMany
    {
        return $this->hasMany(Personal::class);
    }
}

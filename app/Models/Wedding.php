<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wedding extends Model
{
    use HasFactory;
    protected $table = 'weddings';

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

    /**
     * Get all of the resevasi_webs for the Wedding
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resevasi_webs(): HasMany
    {
        return $this->hasMany(Resevasi_wed::class);
    }
}

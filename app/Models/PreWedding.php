<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PreWedding extends Model
{
    use HasFactory;

    protected $table = 'pre_weddings';
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
     * Get all of the reservasi_pre for the PreWedding
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservasi_pre(): HasMany
    {
        return $this->hasMany(Resevasi_Pre::class);
    }
}

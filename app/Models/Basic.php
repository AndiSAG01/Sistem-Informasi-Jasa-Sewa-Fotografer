<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Basic extends Model
{
    use HasFactory;

    protected $table = 'basics';

    protected $fillable = [
        'name'
    ];

    /**
     * Get all of the gradutions for the Basic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function weddings(): HasMany
    {
        return $this->hasMany(Wedding::class);
    }
    /**
     * Get all of the gradutions for the Basic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preweddings(): HasMany
    {
        return $this->hasMany(PreWedding::class);
    }
    /**
     * Get all of the gradutions for the Basic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function engagements(): HasMany
    {
        return $this->hasMany(Engagement::class);
    }
    /**
     * Get all of the gradutions for the Basic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aqiqahs(): HasMany
    {
        return $this->hasMany(Aqiqah::class);
    }
    public function peronals(): HasMany
    {
        return $this->hasMany(Personal::class);
    }
    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }
    public function famillys(): HasMany
    {
        return $this->hasMany(Familly::class);
    }
    public function resevasi_webs(): HasMany
    {
        return $this->hasMany(Resevasi_wed::class);
    }

}

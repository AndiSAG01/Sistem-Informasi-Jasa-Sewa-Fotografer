<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable =
    [
        'resevasi_pres_id',
        'resevasi_weds_id',
        'resevasi_engs_id',
        'resevasi_aqis_id',
        'resevasi_pers_id',
        'resevasi_gros_id',
        'resevasi_fams_id',
    ];


    public function resevasi_pre():BelongsTo
    {
        return $this->belongsTo(Resevasi_Pre::class);
    }
    public function resevasi_wed():BelongsTo
    {
        return $this->belongsTo(Resevasi_wed::class);
    }
    public function resevasi_eng():BelongsTo
    {
        return $this->belongsTo(Resevasi_eng::class);
    }
    public function resevasi_aqi():BelongsTo
    {
        return $this->belongsTo(Resevasi_aqi::class);
    }
    public function resevasi_per():BelongsTo
    {
        return $this->belongsTo(Resevasi_Per::class);
    }
    public function resevasi_gro():BelongsTo
    {
        return $this->belongsTo(Resevasi_Gro::class);
    }
    public function resevasi_fam():BelongsTo
    {
        return $this->belongsTo(Resevasi_Fam::class);
    }
}

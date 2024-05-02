<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resevasi_Per extends Model
{
    use HasFactory;

    protected $table ='resevasi__pers';

    protected $guarded =[];
 /**
     * Get the engagement that owns the Resevasi_wed
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personal(): BelongsTo
    {
        return $this->belongsTo(Personal::class, 'personal_id');
    }

     /**
     * Get the  that owns the Resevasi_Pre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function basic(): BelongsTo
    {
        return $this->belongsTo(Basic::class,'basic_id');
    }
    
    /**
     * Get the user that owns the Resevasi_Pre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

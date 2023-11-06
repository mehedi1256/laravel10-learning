<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    /**
     * this model belong to User model
     *
     * @return BelongsTo
     */
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

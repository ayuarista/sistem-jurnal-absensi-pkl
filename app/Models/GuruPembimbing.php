<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GuruPembimbing extends Model
{
    /** @use HasFactory<\Database\Factories\GuruPembimbingFactory> */
    use HasFactory;

    protected $table = 'guru_pembimbing';

    protected $fillable = [
        'nip',
        'user_id',
    ];

    /**
     * Get the user that owns this guru pembimbing.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all siswa that this guru pembimbing guides.
     */
    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class, 'guru_pembimbing_id');
    }
}

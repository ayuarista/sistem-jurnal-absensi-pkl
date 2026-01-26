<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'user_id',
        'nis',
        'kelas',
        'tempat_pkl',
        'guru_pembimbing_id',
    ];

    /**
     * Get the user that owns this siswa.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the guru pembimbing that guides this siswa.
     */
    public function guruPembimbing(): BelongsTo
    {
        return $this->belongsTo(GuruPembimbing::class, 'guru_pembimbing_id');
    }

    /**
     * Get all jurnal for this siswa.
     */
    public function jurnal(): HasMany
    {
        return $this->hasMany(Jurnal::class, 'siswa_id');
    }

    /**
     * Get all absensi for this siswa.
     */
    public function absensi(): HasMany
    {
        return $this->hasMany(Absensi::class, 'siswa_id');
    }
}

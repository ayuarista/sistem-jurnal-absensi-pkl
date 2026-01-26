<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurnal extends Model
{
    /** @use HasFactory<\Database\Factories\JurnalFactory> */
    use HasFactory;

    protected $table = 'jurnal';

    protected $fillable = [
        'siswa_id',
        'tanggal',
        'kegiatan',
        'foto_kegiatan',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    /**
     * Get the siswa that owns this jurnal.
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    /**
     * Get all absensi that linked to this jurnal.
     */
    public function absensi(): HasMany
    {
        return $this->hasMany(Absensi::class, 'jurnal_id');
    }
}

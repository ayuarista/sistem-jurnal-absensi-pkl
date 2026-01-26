<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absensi extends Model
{
    /** @use HasFactory<\Database\Factories\AbsensiFactory> */
    use HasFactory;

    protected $table = 'absensi';

    protected $fillable = [
        'siswa_id',
        'tanggal',
        'jam_datang',
        'jam_pulang',
        'kehadiran',
        'jurnal_id',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jam_datang' => 'time',
        'jam_pulang' => 'time',
    ];

    /**
     * Get the siswa that owns this absensi.
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    /**
     * Get the jurnal that linked to this absensi.
     */
    public function jurnal(): BelongsTo
    {
        return $this->belongsTo(Jurnal::class, 'jurnal_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    use HasFactory;
    protected $table = 'murid';
    protected $guarded = [];

    protected $casts = [
        'kebutuhankusus' => 'array', 
        'kebutuhankususayah' => 'array', 
        'kebutuhankususibu' => 'array', 
        'kebutuhankususwali' => 'array', 
    ];
    
    public function getKebutuhanNamaAttribute()
    {
        $mapping = [
            '1' => 'Tidak',
            '2' => 'Netra (A)',
            '3' => 'Rungu (B)',
            '4' => 'Grahita ringan (C)',
            '5' => 'Grahita Sedang (C1)',
            '6' => 'Daksa Ringan (D)',
            '7' => 'Daksa Sedang (D1)',
            '8' => 'Laras',
            '9' => 'Wicara (F)',
            '10' => 'Tuna ganda (G)',
            '12' => 'Hiper aktif (H)',
            '13' => 'Cerdas Istimewa (i)',
            '14' => 'Bakat Istimewa (J)',
            '15' => 'Kesulitan Belajar (K)',
            '16' => 'Indigo (O)',
            '17' => 'Down Sindrome (P)',
            '18' => 'Autis (Q)',
        ];

        $ids = $this->kebutuhankusus;

        if (is_string($ids)) {
            $ids = json_decode($ids, true);
        }

        if (!is_array($ids)) {
            return [];
        }

        return collect($ids)->map(fn($id) => $mapping[$id] ?? 'Tidak diketahui')->toArray();
    }

    protected $dates = ['created_at'];
}

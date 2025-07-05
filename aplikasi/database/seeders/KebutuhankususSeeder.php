<?php

namespace Database\Seeders;

use App\Models\Kebutuhankusus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KebutuhankususSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kebutuhankusus::create(['title'=>"tidak"]);
        Kebutuhankusus::create(['title'=>"Netra (A)"]);
        Kebutuhankusus::create(['title'=>"Rungu (B)"]);
        Kebutuhankusus::create(['title'=>"Grahita ringan (C)"]);
        Kebutuhankusus::create(['title'=>"Gerahita Sedang (C1)"]);
        Kebutuhankusus::create(['title'=>"Daksa Ringan (D)"]);
        Kebutuhankusus::create(['title'=>"Daksa Sedang (D1)"]);
        Kebutuhankusus::create(['title'=>"Laras (E)"]);
        Kebutuhankusus::create(['title'=>"Wicara (F)"]);
        Kebutuhankusus::create(['title'=>"Tuna Ganda (G)"]);
        Kebutuhankusus::create(['title'=>"Tuna Ganda (G)"]);
        Kebutuhankusus::create(['title'=>"Hiper Aktif (H)"]);
        Kebutuhankusus::create(['title'=>"Cerdas Istimewa (i)"]);
        Kebutuhankusus::create(['title'=>"Bakat Istimewa (J)"]);
        Kebutuhankusus::create(['title'=>"Kesulitan Belajra (K)"]);
        Kebutuhankusus::create(['title'=>"Indigo (O)"]);
        Kebutuhankusus::create(['title'=>"Down Sindrome (P)"]);
        Kebutuhankusus::create(['title'=>"Autis (Q)"]);
    }
}

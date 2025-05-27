<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use App\Models\Anggota;

public function run()
{
    Anggota::factory()->count(10)->create();
}

}

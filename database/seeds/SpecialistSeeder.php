<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Dokter Umum', 'subname' => 'Praktisi umum'],
            ['name' => 'Dokter Gigi', 'subname' => 'Praktisi gigi, rongga mulut dan rahang'],
            ['name' => 'Dokter Spesialis Jantung', 'subname' => 'Kardiologi'],
            ['name' => 'Dokter Spesialis Kulit dan Kelamin', 'subname' => 'Dermatologi'],
            ['name'=> 'Dokter Spesialis THT', 'subname' => 'Otolaringologi']
        ];

        DB::table('specialists')->insertOrIgnore($data);
    }
}

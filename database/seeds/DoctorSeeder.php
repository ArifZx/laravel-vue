<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'dr. Agieta Zulfikli, SpTHT-KL', 'gender' => 'f'],
            ['name' => 'dr. Adisti M R, SpTHT-KL(K), SpTHT-KL', 'gender' => 'f'],
            ['name' => 'Dr, dr. Mirta H, SpTHT-KL(K)', 'gender' => 'f'],
        ];

        DB::table('doctors')->insertOrIgnore($data);
    }
}

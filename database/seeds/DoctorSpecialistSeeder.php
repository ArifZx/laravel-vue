<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['doctor_id' => 1, 'specialist_id' => 1],
            ['doctor_id' => 2, 'specialist_id' => 2],
            ['doctor_id' => 2, 'specialist_id' => 1],
            ['doctor_id' => 3, 'specialist_id' => 3]
        ];

        DB::table('doctor_specialist')->insertOrIgnore($data);
    }
}

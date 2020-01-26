<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['lat' => -6.2399482, 'long' => 106.7911178, 'name' => 'Rumah Sakit Pusat Pertamina', 'address' => 'Jl. Kyai Maja No.43, RT.4/RW.8, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120'],
            ['lat' => -6.2318005, 'long' => 106.7894241, 'name' => 'Klinik Pertamedika Sinabung', 'address' => 'JL. Sinabung II, No. 32 AF, Kebayoran Baru, RT.6/RW.5, Gunung, Kebayoran Baru, RT.6/RW.5, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120'],
        ];

        DB::table('places')->insertOrIgnore($data);
    }
}

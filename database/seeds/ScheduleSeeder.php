<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctorsIDs = Collection::unwrap(DB::table('doctors')->pluck('id'));
        $placesIDs = Collection::unwrap(DB::table('places')->pluck('id'));
        $data = [];
        
        for($i = 0; $i < 5; $i++) {
            $day = random_int(0, $i);
            $minutes = random_int(0, $i * 600);
            $from = Carbon::now()->addMinutes($minutes)->addDays($day);
            $to = Carbon::now()->addMinutes($minutes)->addDays($day)->addHours(2);
            array_push($data, [
                'doctor_id' => Arr::random($doctorsIDs),
                'place_id' => Arr::random($placesIDs),
                'canOnlineBook' => random_int(0, 1),
                'from' => $from,
                'to' => $to,
            ]);
        }

        DB::table('schedules')->insertOrIgnore($data);
    }
}

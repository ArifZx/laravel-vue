<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScheludeResource;
use App\Schedule;
use App\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filter = request('filter');
        $specialistId = request('specialist_id');
        $doctorId = request('doctor_id');

        $doctorIds = [];

        if ($doctorId == null) {
            $doctorIds = Specialist::find($specialistId)->doctors->pluck('id');
        } else {
            $doctorIds = [$doctorId];
        }

        if ($filter == 'filter-today') {
            return ScheludeResource::collection(
                Schedule::whereDate('from', '=', Carbon::now())
                    ->whereIn('doctor_id', $doctorIds)
                    ->where('from', '<=', Carbon::now('Asia/Jakarta')->endOfDay()->timezone(0))
                    ->orderBy('from', 'asc')
                    ->get()
            );
        } else if ($filter == 'filter-online') {
            return ScheludeResource::collection(
                Schedule::where('to', '>=', Carbon::now())
                    ->where('canOnlineBook', 1)
                    ->whereIn('doctor_id', $doctorIds)
                    ->orderBy('from', 'asc')
                    ->get()
            );
        }

        error_log('specialist ' . $specialistId);
        error_log('doctor '.$doctorId);
        return ScheludeResource::collection(
            Schedule::where('to', '>=', Carbon::now())
                ->whereIn('doctor_id', $doctorIds)
                ->orderBy('from', 'asc')
                ->get()
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Mentor;
use App\Schedule;
use App\Section;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function getSchedules()
    {
        $schedules = Schedule::with(['mentor', 'section'])->orderBy('time_start')->get();

        return $schedules->groupBy('day')->reverse();
    }

    public function userSchedules(Request $request)
    {
        $sections = Section::orderBy('name')->get();

        $schedules = Schedule::with(['mentor', 'section'])
            ->orderBy('time_start');
        if ($request->input('filter') !== null)
            $schedules = $schedules->where('section_id', $request->input('filter'));

        $schedules = $schedules->get();

        $schedules = $schedules->groupBy('day')->reverse();

        return view('schedules', [
            'schedules' => $schedules,
            'sections' => $sections
        ]);
    }

    public function index()
    {
        return view('admin.schedules', [
            'schedules' => $this->getSchedules()
        ]);
    }

    public function add($day)
    {
        $sections = Section::orderBy('name')->get();
        $mentors = Mentor::orderBy('name')->get();

        return view('modules.schedules.add', [
            'day' => $day,
            'sections' => $sections,
            'mentors' => $mentors,
        ]);
    }

    public function create(Request $request)
    {
        $schedule = new Schedule;

        $schedule->time_start = $request->time_start;
        $schedule->section_id = $request->section_id;
        $schedule->day = $request->day;
        $schedule->mentor_id = $request->mentor_id;

        $schedule->save();

        return redirect()->route('schedules');
    }

    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $sections = Section::orderBy('name')->get();
        $mentors = Mentor::orderBy('name')->get();

        return view('modules.schedules.edit', [
            'schedule' => $schedule,
            'sections' => $sections,
            'mentors' => $mentors,
        ]);
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);

        $schedule->time_start = $request->time_start;
        $schedule->section_id = $request->section_id;
        $schedule->day = $request->day;
        $schedule->mentor_id = $request->mentor_id;

        $schedule->update();

        return back();
    }

    public function delete($id)
    {
        $schedule = Schedule::find($id);

        $schedule->delete();

        return back();
    }
}

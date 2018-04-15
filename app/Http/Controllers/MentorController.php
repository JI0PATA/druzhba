<?php

namespace App\Http\Controllers;

use App\Mentor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::orderBy('id', 'DESC')->limit('4')->get();

        return view('admin.mentors', [
            'mentors' => $mentors
        ]);
    }

    public function add()
    {
        return view('modules.mentors.add');
    }

    public function create(Request $request)
    {
        $mentor = new Mentor;

        if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
            $request->file->move(public_path('img/mentors'), $request->file->getClientOriginalName());
            $mentor->img = $request->file->getClientOriginalName();
        } else return back();

        $mentor->name = $request->name;
        $mentor->section = $request->section;
        $mentor->years = $request->years;

        $mentor->save();

        return redirect()->route('mentors');
    }

    public function edit($id)
    {
        $mentor = Mentor::find($id);

        return view('modules.mentors.edit', [
            'mentor' => $mentor
        ]);
    }

    public function update(Request $request, $id)
    {
        $mentor = Mentor::find($id);

        if ($request->file !== null) {
            if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
                $request->file->move(public_path('img/mentors'), $request->file->getClientOriginalName());
                $mentor->img = $request->file->getClientOriginalName();
            } else return back();
        }

        $mentor->name = $request->name;
        $mentor->years = $request->years;
        $mentor->section = $request->section;

        $mentor->save();

        return back();
    }

    public function delete($id)
    {
        $mentor = Mentor::find($id);
        $mentor->delete();
        return redirect()->route('mentors');
    }
}

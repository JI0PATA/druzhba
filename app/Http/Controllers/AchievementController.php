<?php

namespace App\Http\Controllers;

use App\Achievement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('id', 'DESC')->get();

        return view('admin.achievements', [
            'achievements' => $achievements
        ]);
    }

    public function delete($id)
    {
        $achievement = Achievement::find($id);
        $achievement->delete();
        return redirect()->route('achievements');
    }

    public function add()
    {
        return view('modules.achievements.add');
    }

    public function create(Request $request)
    {
        $achievement = new Achievement;

        if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
            $request->file->move(public_path('img/cup'), $request->file->getClientOriginalName());
            $achievement->img = $request->file->getClientOriginalName();
        } else return back();

        $achievement->name = $request->name;
        $achievement->year = $request->year;
        $achievement->competitorsYear = $request->competitorsYear;

        $achievement->save();

        return redirect()->route('achievements');
    }

    public function edit($id)
    {
        $achievement = Achievement::find($id);

        return view('modules.achievements.edit', [
            'achievement' => $achievement
        ]);
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievement::find($id);

        if ($request->file !== null) {
            if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
                $request->file->move(public_path('img/cup'), $request->file->getClientOriginalName());
                $achievement->img = $request->file->getClientOriginalName();
            } else return back();
        }

        $achievement->name = $request->name;
        $achievement->year = $request->year;
        $achievement->competitorsYear = $request->competitorsYear;

        $achievement->update();

        return back();
    }

    public function getAchievement($id)
    {
        $achievement = Achievement::find($id);

        return view('modules.achievements.view', [
            'achievement' => $achievement
        ]);
    }

    public function getAchievements()
    {
        $achievements = Achievement::orderBy('id', 'DESC')->get();

        return view('achievements', [
            'achievements' => $achievements
        ]);
    }
}

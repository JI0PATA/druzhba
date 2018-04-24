<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::orderBy('name')->get();

        return view('admin.sections', [
            'sections' => $sections
        ]);
    }

    public function add()
    {
        return view('modules.sections.add');
    }

    public function create(Request $request)
    {
        $section = new Section;

        $section->name = $request->name;

        $section->save();

        return redirect()->route('sections');
    }

    public function edit($id)
    {
        $section = Section::find($id);

        return view('modules.sections.edit', [
            'section' => $section
        ]);
    }

    public function update(Request $request, $id)
    {
        $section = Section::find($id);

        $section->name = $request->name;

        $section->update();

        return redirect()->back();
    }

    public function delete($id)
    {
        $section = Section::find($id);
        $section->delete();

        return redirect()->route('sections');
    }
}

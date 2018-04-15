<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function index($id)
    {
        $photos = Photo::where('album_id', $id)->orderBy('id', 'DESC')->get();

        return view('admin.photos', [
            'photos' => $photos,
            'idAlbum' => $id
        ]);
    }

    public function update(Request $request, $id)
    {
        foreach($request->file as $file) {
            $photo = new Photo;
            if ($file->getClientMimeType() === 'image/png' || $file->getClientMimeType() === 'image/jpeg') {
                $file->move(public_path('img/albums/photos'), $file->getClientOriginalName());
                $photo->img = $file->getClientOriginalName();
            } else return back();
            $photo->album_id = $id;
            $photo->save();
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return back();
    }
}

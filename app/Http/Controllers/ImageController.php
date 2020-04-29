<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;

class ImageController extends Controller
{
    public function imageUpload()
    {
        return view('image');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
            // dd($imageName);
        $request->image = storage_path('app/public/images/') . $imageName;
        //$request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }
}


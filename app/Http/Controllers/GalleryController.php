<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery_title;
use App\Models\Gallery_category;
use App\Models\Gallery;
use File;

class GalleryController extends Controller
{
    //----------- Gallery_title Section -----------
    public function Gallery_title()
    {

        $Gallery_title = Gallery_title::orderBy('id', 'DESC')->get();
        return view('Backend.Gallery.gallery_header', compact('Gallery_title'));
    }

    // Create
    public function Gallery_title_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Gallery_title = new Gallery_title;
        $Gallery_title->title = $request->title;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/gallery/'), $filename);
            $Gallery_title['image'] = $filename;
        }

        $Gallery_title->save();
        if ($request) {

            return back()->with('success', 'Successfully! Gallery_title Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Gallery_title_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Gallery_title_update = Gallery_title::find($id);
        $Gallery_title_update->title = $request->title;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/gallery/' . $Gallery_title_update->image)) {
                File::delete('assets/img/uploaded/gallery/' . $Gallery_title_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/gallery/'), $filename);
            $Gallery_title_update['image'] = $filename;
        }

        $Gallery_title_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! Gallery_title Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Gallery_title_delete($id)
    {
        $Gallery_title_delete= Gallery_title::find($id);

        if (File::exists('assets/img/uploaded/gallery/'.$Gallery_title_delete->image)) {
            File::delete('assets/img/uploaded/gallery/'.$Gallery_title_delete->image);

            $Gallery_title_delete->delete();
            return back()->with('success', 'Successfully! Gallery_title Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    // Gallery Category Section
    //----------- Gallery Section -----------
    public function gallery()
    {
        $Gallery_category = Gallery_category::orderBy('id', 'DESC')->get();
        $Gallery = Gallery::orderBy('id', 'DESC')->get();
        return view('Backend.Gallery.gallery', compact('Gallery_category','Gallery'));
    }

    // Create
    public function Gallery_category_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
        ]);

        $Gallery_category = new Gallery_category;
        $Gallery_category->name = $request->name;

        $Gallery_category->save();
        if ($request) {
            return back()->with('success', 'Successfully! Gallery Name Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Gallery_category_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:200',
        ]);

        $Gallery_category = Gallery_category::find($id);
        $Gallery_category->name = $request->name;

        $Gallery_category->save();

        if ($request) {
            return back()->with('success', 'Successfully! Gallery Category Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Gallery_category_delete($id)
    {

        $Gallery_category= Gallery_category::find($id);

        if(!is_null($Gallery_category)) {

            $gallery_delete = Gallery::where('gallery_id', $Gallery_category->id )->get();

            foreach($gallery_delete as $img)
            {
                    $gallery_delete =Gallery::where('id',$img->id)->first();

                    if (File::exists('assets/img/uploaded/gallery/'.$gallery_delete->image)) {
                    File::delete('assets/img/uploaded/gallery/'.$gallery_delete->image);
                }
                    $gallery_delete->delete();

            }
            $Gallery_category->delete();
            return back()->with('success', 'Gallery Category Deleted Successfully');
        }

        else
        {
            return back()->with('success', ' Deleted Unsuccessfully');
        }
    }

    // Gallery Image Section
    // Create
    public function Gallery_create(Request $request)
    {
        $request->validate([
            'gallery_id' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|nullable|max:500',
        ]);

        $Gallery = new Gallery;
        $Gallery->gallery_id = $request->gallery_id;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/Gallery/'), $filename);
            $Gallery['image'] = $filename;
        }

        $Gallery->save();

        if ($request) {
            return back()->with('success', 'Successfully! Gallery Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Gallery_update(Request $request, $id)
    {
        $request->validate([
            'gallery_id' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|nullable|max:500',
        ]);

        $Gallery = Gallery::find($id);
        $Gallery->gallery_id = $request->gallery_id;

        if ($request->file('logo')) {
            if (File::exists('assets/img/uploaded/Gallery/' . $Gallery->image)) {
                File::delete('assets/img/uploaded/Gallery/' . $Gallery->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/Gallery/'), $filename);
            $Gallery['image'] = $filename;
        }

        $Gallery->save();

        if ($request) {
            return back()->with('success', 'Successfully! Gallery Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Gallery_delete($id)
    {
        $Gallery= Gallery::find($id);

        if (File::exists('assets/img/uploaded/Gallery/'.$Gallery->image)) {
            File::delete('assets/img/uploaded/Gallery/'.$Gallery->image);

            $Gallery->delete();
            return back()->with('success', 'Successfully! Gallery Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

}

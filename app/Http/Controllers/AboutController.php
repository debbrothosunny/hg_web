<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About_header;
use App\Models\About_services;
use App\Models\About_progress;
use File;
class AboutController extends Controller
{
    //----------- Header Section -----------
    public function header()
    {
        $header = About_header::orderBy('id', 'DESC')->get();
        return view('Backend.About.header', compact('header'));
    }

    // Create
    public function header_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $header = new About_header;
        $header->title = $request->title;
        $header->sub_title = $request->sub_title;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $header['image'] = $filename;
        }

        $header->save();
        if ($request) {

            return back()->with('success', 'Successfully! Header Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function header_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $header_update = About_header::find($id);
        $header_update->title = $request->title;
        $header_update->sub_title = $request->sub_title;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/about/' . $header_update->image)) {
                File::delete('assets/img/uploaded/about/' . $header_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $header_update['image'] = $filename;
        }

        $header_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! Header Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function header_delete($id)
    {
        $header_delete= About_header::find($id);

        if (File::exists('assets/img/uploaded/about/'.$header_delete->image)) {
            File::delete('assets/img/uploaded/about/'.$header_delete->image);

            $header_delete->delete();
            return back()->with('success', 'Successfully! Header Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    //----------- services Section -----------
    public function service()
    {
        $service = About_services::orderBy('id', 'DESC')->get();
        return view('Backend.About.service', compact('service'));
    }

    // Create
    public function service_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'image_1' => 'max:200|mimes:jpg,png,jpeg',
            'title_1' => 'required|max:200',
            'description_1' => 'required|max:750',
            'image_2' => 'max:200|mimes:jpg,png,jpeg',
            'title_2' => 'required|max:200',
            'description_2' => 'required|max:750',
            'image_3' => 'max:200|mimes:jpg,png,jpeg',
            'title_3' => 'required|max:200',
            'description_3' => 'required|max:750',

        ]);

        $services = new About_services;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->title_1 = $request->title_1;
        $services->description_1 = $request->description_1;
        $services->title_2 = $request->title_2;
        $services->description_2 = $request->description_2;
        $services->title_3 = $request->title_3;
        $services->description_3 = $request->description_3;

        if ($request->file('image_1')) {

            $file = $request->file('image_1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $services['image_1'] = $filename;
        }

        if ($request->file('image_2')) {

            $file = $request->file('image_2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $services['image_2'] = $filename;
        }

        if ($request->file('image_3')) {

            $file = $request->file('image_3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $services['image_3'] = $filename;
        }

        $services->save();

        if ($request) {
            return back()->with('success', 'Successfully! Offer Content Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function service_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'image_1' => 'max:200|mimes:jpg,png,jpeg',
            'title_1' => 'required|max:200',
            'description_1' => 'required|max:750',
            'image_2' => 'max:200|mimes:jpg,png,jpeg',
            'title_2' => 'required|max:200',
            'description_2' => 'required|max:750',
            'image_3' => 'max:200|mimes:jpg,png,jpeg',
            'title_3' => 'required|max:200',
            'description_3' => 'required|max:750',
        ]);

        $services = About_services::find($id);
        $services->title = $request->title;
        $services->description = $request->description;
        $services->title_1 = $request->title_1;
        $services->description_1 = $request->description_1;
        $services->title_2 = $request->title_2;
        $services->description_2 = $request->description_2;
        $services->title_3 = $request->title_3;
        $services->description_3 = $request->description_3;

        if ($request->file('image_1')) {
            if (File::exists('assets/img/uploaded/about/' . $services->image_1)) {
                File::delete('assets/img/uploaded/about/' . $services->image_1);
            }
            $file = $request->file('image_1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $services['image_1'] = $filename;
        }

        if ($request->file('image_2')) {
            if (File::exists('assets/img/uploaded/about/' . $services->image_2)) {
                File::delete('assets/img/uploaded/about/' . $services->image_2);
            }
            $file = $request->file('image_2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $services['image_2'] = $filename;
        }

        if ($request->file('image_3')) {
            if (File::exists('assets/img/uploaded/about/' . $services->image_3)) {
                File::delete('assets/img/uploaded/about/' . $services->image_3);
            }
            $file = $request->file('image_3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/about/'), $filename);
            $services['image_3'] = $filename;
        }

        $services->save();

        if ($request) {
            return back()->with('success', 'Successfully! Services Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function service_delete(Request $request, $id)
    {

        $services= About_services::find($id);

        if (File::exists('assets/img/uploaded/about/'.$services->image_1 ?? '')) {
            File::delete('assets/img/uploaded/about/'.$services->image_1 ?? '');
        }
        if (File::exists('assets/img/uploaded/about/'.$services->image_2 ?? '')) {
            File::delete('assets/img/uploaded/about/'.$services->image_2 ?? '');
        }
        if (File::exists('assets/img/uploaded/about/'.$services->image_3 ?? '')) {
            File::delete('assets/img/uploaded/about/'.$services->image_3 ?? '');
        }
        $services->delete();

        if ($request) {
            return back()->with('success', 'Successfully! Services Delete');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    //----------- Offer Section -----------
    public function progress()
    {
        $progress = About_progress::orderBy('id', 'DESC')->get();
        return view('Backend.About.progress', compact('progress'));
    }

    // Create
    public function progress_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'value' => 'required|max:200',
        ]);

        $progress = new About_progress;
        $progress->title = $request->title;
        $progress->value = $request->value;

        $progress->save();
        if ($request) {
            return back()->with('success', 'Successfully! Progress Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function progress_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'value' => 'required|max:200',
        ]);

        $progress = About_progress::find($id);
        $progress->title = $request->title;
        $progress->value = $request->value;

        $progress->save();

        if ($request) {
            return back()->with('success', 'Successfully! Progress Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function progress_delete($id)
    {
        $progress= About_progress::find($id);
        $progress->delete();

        return back()->with('success', 'Successfully! Progress Delete');
    }
}

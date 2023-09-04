<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home_header;
use App\Models\Home_about;
use App\Models\Home_offer_title;
use App\Models\Home_offer_content;
use App\Models\Home_choose;
use App\Models\Home_app;
use App\Models\Home_testimonial_title;
use App\Models\Home_testimonial_content;
use App\Models\Home_trainer;
use App\Models\site_setting;
use File;
class HomeController extends Controller
{
    //----------- Header Section -----------
    public function header()
    {

        $header = Home_header::orderBy('id', 'DESC')->get();
        return view('Backend.Home.header', compact('header'));
    }

    // Create
    public function header_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $header = new Home_header;
        $header->title = $request->title;
        $header->sub_title = $request->sub_title;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
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

        $header_update = Home_header::find($id);
        $header_update->title = $request->title;
        $header_update->sub_title = $request->sub_title;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/home/' . $header_update->image)) {
                File::delete('assets/img/uploaded/home/' . $header_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
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
        $header_delete= Home_header::find($id);

        if (File::exists('assets/img/uploaded/home/'.$header_delete->image)) {
            File::delete('assets/img/uploaded/home/'.$header_delete->image);

            $header_delete->delete();
            return back()->with('success', 'Successfully! Header Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }


    //----------- About Section -----------
    public function about()
    {

        $about = Home_about::orderBy('id', 'DESC')->get();
        return view('Backend.Home.about', compact('about'));
    }

    // Create
    public function about_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'description' => 'required|max:750',
            'video' => 'nullable',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $about = new Home_about;
        $about->title = $request->title;
        $about->sub_title = $request->sub_title;
        $about->description = $request->description;
        $about->video = $request->video;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $about['image'] = $filename;
        }

        $about->save();
        if ($request) {

            return back()->with('success', 'Successfully! About Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function about_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'description' => 'required|max:750',
            'video' => 'nullable',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $about_update = Home_about::find($id);
        $about_update->title = $request->title;
        $about_update->sub_title = $request->sub_title;
        $about_update->description = $request->description;
        $about_update->video = $request->video;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/home/' . $about_update->image)) {
                File::delete('assets/img/uploaded/home/' . $about_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $about_update['image'] = $filename;
        }

        $about_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! About Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function about_delete($id)
    {
        $about_delete= Home_about::find($id);

        if (File::exists('assets/img/uploaded/home/'.$about_delete->image)) {
            File::delete('assets/img/uploaded/home/'.$about_delete->image);

            $about_delete->delete();
            return back()->with('success', 'Successfully! About Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    //----------- Offer Section -----------
    public function offer()
    {
        $offer_content = Home_offer_content::orderBy('id', 'DESC')->get();
        $offer_title = Home_offer_title::orderBy('id', 'DESC')->get();
        return view('Backend.Home.offer', compact('offer_title','offer_content'));
    }

    // Create
    public function offer_title_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
        ]);

        $offer_title = new Home_offer_title;
        $offer_title->title = $request->title;
        $offer_title->description = $request->description;

        $offer_title->save();
        if ($request) {
            return back()->with('success', 'Successfully! Offer Title Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function offer_title_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
        ]);

        $offer_title = Home_offer_title::find($id);
        $offer_title->title = $request->title;
        $offer_title->description = $request->description;

        $offer_title->save();

        if ($request) {
            return back()->with('success', 'Successfully! Offer Title Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function offer_title_delete($id)
    {
        $offer_title= Home_offer_title::find($id);
        $offer_title->delete();

        return back()->with('success', 'Successfully! Offer Title Delete');
    }

    // offer Content

    // Create
    public function offer_content_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'image' => 'mimes:jpg,png,jpeg|nullable|max:500',
        ]);

        $offer_content = new Home_offer_content;
        $offer_content->title = $request->title;
        $offer_content->description = $request->description;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $offer_content['image'] = $filename;
        }

        $offer_content->save();

        if ($request) {
            return back()->with('success', 'Successfully! Offer Content Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function offer_content_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'image' => 'mimes:jpg,png,jpeg|nullable|max:500',
        ]);

        $offer_content = Home_offer_content::find($id);
        $offer_content->title = $request->title;
        $offer_content->description = $request->description;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/home/' . $offer_content->image)) {
                File::delete('assets/img/uploaded/home/' . $offer_content->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $offer_content['image'] = $filename;
        }

        $offer_content->save();

        if ($request) {
            return back()->with('success', 'Successfully! Offer Content Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function offer_content_delete($id)
    {
        $offer_content= Home_offer_content::find($id);

        if (File::exists('assets/img/uploaded/home/'.$offer_content->image)) {
            File::delete('assets/img/uploaded/home/'.$offer_content->image);

            $offer_content->delete();
            return back()->with('success', 'Successfully! Offer Content Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    //----------- Choose Section -----------
    public function choose()
    {
        $choose = Home_choose::orderBy('id', 'DESC')->get();
        return view('Backend.Home.choose', compact('choose'));
    }

    // Create
    public function choose_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'icon' => 'max:200|mimes:jpg,png,jpeg',
            'icon_title' => 'required|max:200',
            'icon_1' => 'max:200|mimes:jpg,png,jpeg',
            'icon_title_1' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $choose = new Home_choose;
        $choose->title = $request->title;
        $choose->icon_title = $request->icon_title;
        $choose->icon_title_1 = $request->icon_title_1;
        $choose->description = $request->description;

        if ($request->file('icon')) {

            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $choose['icon'] = $filename;
        }
        if ($request->file('icon_1')) {

            $file = $request->file('icon_1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $choose['icon_1'] = $filename;
        }
        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $choose['image'] = $filename;
        }

        $choose->save();

        if ($request) {
            return back()->with('success', 'Successfully! Offer Content Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function choose_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'icon' => 'max:200|mimes:jpg,png,jpeg',
            'icon_title' => 'required|max:200',
            'icon_1' => 'max:200|mimes:jpg,png,jpeg',
            'icon_title_1' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $choose = Home_choose::find($id);
        $choose->title = $request->title;
        $choose->icon_title = $request->icon_title;
        $choose->icon_title_1 = $request->icon_title_1;
        $choose->description = $request->description;

        if ($request->file('icon')) {
            if (File::exists('assets/img/uploaded/home/' . $choose->icon)) {
                File::delete('assets/img/uploaded/home/' . $choose->icon);
            }
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $choose['icon'] = $filename;
        }

        if ($request->file('icon_1')) {
            if (File::exists('assets/img/uploaded/home/' . $choose->icon_1)) {
                File::delete('assets/img/uploaded/home/' . $choose->icon_1);
            }
            $file = $request->file('icon_1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $choose['icon_1'] = $filename;
        }

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/home/' . $choose->image)) {
                File::delete('assets/img/uploaded/home/' . $choose->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $choose['image'] = $filename;
        }

        $choose->save();

        if ($request) {
            return back()->with('success', 'Successfully! Offer Content Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function choose_delete(Request $request, $id)
    {

        $choose= Home_choose::find($id);

        if (File::exists('assets/img/uploaded/home/'.$choose->icon ?? '')) {
            File::delete('assets/img/uploaded/home/'.$choose->icon ?? '');
        }
        if (File::exists('assets/img/uploaded/home/'.$choose->icon_1 ?? '')) {
            File::delete('assets/img/uploaded/home/'.$choose->icon_1 ?? '');
        }
        if (File::exists('assets/img/uploaded/home/'.$choose->image ?? '')) {
            File::delete('assets/img/uploaded/home/'.$choose->image ?? '');
        }
        $choose->delete();

        if ($request) {
            return back()->with('success', 'Successfully! Choose Delete');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    //----------- App Store Section -----------
    public function app()
    {

        $app = Home_app::orderBy('id', 'DESC')->get();
        return view('Backend.Home.app', compact('app'));
    }

    // Create
    public function app_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'description' => 'required|max:750',
            'app_store' => 'nullable|max:250',
            'google_play' => 'nullable|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $app = new Home_app;
        $app->title = $request->title;
        $app->sub_title = $request->sub_title;
        $app->description = $request->description;
        $app->app_store = $request->app_store;
        $app->google_play = $request->google_play;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $app['image'] = $filename;
        }

        $app->save();
        if ($request) {

            return back()->with('success', 'Successfully! App Store Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function app_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'description' => 'required|max:750',
            'app_store' => 'nullable|max:250',
            'google_play' => 'nullable|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $app = Home_app::find($id);
        $app->title = $request->title;
        $app->sub_title = $request->sub_title;
        $app->description = $request->description;
        $app->app_store = $request->app_store;
        $app->google_play = $request->google_play;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/home/' . $app->image)) {
                File::delete('assets/img/uploaded/home/' . $app->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $app['image'] = $filename;
        }

        $app->save();

        if ($request) {

            return back()->with('success', 'Successfully! App Store Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function app_delete($id)
    {
        $app= Home_app::find($id);

        if (File::exists('assets/img/uploaded/home/'.$app->image)) {
            File::delete('assets/img/uploaded/home/'.$app->image);

            $app->delete();
            return back()->with('success', 'Successfully! App Store Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    //----------- Testimonial Section -----------
    public function testimonial()
    {
        $testimonial_content = Home_testimonial_content::orderBy('id', 'DESC')->get();
        $testimonial_title = Home_testimonial_title::orderBy('id', 'DESC')->get();
        return view('Backend.Home.testimonial', compact('testimonial_title','testimonial_content'));
    }

    // Create
    public function testimonial_title_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
        ]);

        $offer_title = new Home_testimonial_title;
        $offer_title->title = $request->title;

        $offer_title->save();
        if ($request) {
            return back()->with('success', 'Successfully! Testimonial Title Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function testimonial_title_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
        ]);

        $testimonial_title = Home_testimonial_title::find($id);
        $testimonial_title->title = $request->title;

        $testimonial_title->save();

        if ($request) {
            return back()->with('success', 'Successfully! Testimonial Title Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function testimonial_title_delete($id)
    {
        $testimonial_title= Home_testimonial_title::find($id);
        $testimonial_title->delete();

        return back()->with('success', 'Successfully! Testimonial Title Delete');
    }

    // Testimonial Content

    // Create
    public function testimonial_content_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'position' => 'required|max:200',
            'description' => 'required|max:750',
            'image' => 'mimes:jpg,png,jpeg|max:200',
        ]);

        $testimonial = new Home_testimonial_content;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description = $request->description;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $testimonial['image'] = $filename;
        }

        $testimonial->save();
        if ($request) {

            return back()->with('success', 'Successfully! Testimonial Content Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function testimonial_content_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:200',
            'position' => 'required|max:200',
            'description' => 'required|max:750',
            'image' => 'mimes:jpg,png,jpeg|max:200',
        ]);

        $testimonial = Home_testimonial_content::find($id);
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description = $request->description;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/home/' . $testimonial->image)) {
                File::delete('assets/img/uploaded/home/' . $testimonial->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $testimonial['image'] = $filename;
        }

        $testimonial->save();

        if ($request) {

            return back()->with('success', 'Successfully! Testimonial Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function testimonial_content_delete($id)
    {
        $testimonial= Home_testimonial_content::find($id);

        if (File::exists('assets/img/uploaded/home/'.$testimonial->image)) {
            File::delete('assets/img/uploaded/home/'.$testimonial->image);

            $testimonial->delete();
            return back()->with('success', 'Successfully! Testimonial Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    //----------- Trainer Section -----------
    public function trainer()
    {
        $trainer = Home_trainer::orderBy('id', 'DESC')->get();
        return view('Backend.Home.trainer', compact('trainer'));
    }

    // Create
    public function trainer_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'image_1' => 'max:200|mimes:jpg,png,jpeg',
            'name_1' => 'required|max:200',
            'fb_1' => 'required|max:200',
            'image_2' => 'max:200|mimes:jpg,png,jpeg',
            'name_2' => 'required|max:200',
            'fb_2' => 'required|max:200',
            'image_3' => 'max:200|mimes:jpg,png,jpeg',
            'name_3' => 'required|max:200',
            'fb_3' => 'required|max:200',
            'image_4' => 'max:200|mimes:jpg,png,jpeg',
            'name_4' => 'required|max:200',
            'fb_4' => 'required|max:200',
            'image_5' => 'max:200|mimes:jpg,png,jpeg',
            'name_5' => 'required|max:200',
            'fb_5' => 'required|max:200',
            'image_6' => 'max:200|mimes:jpg,png,jpeg',
            'name_6' => 'required|max:200',
            'fb_6' => 'required|max:200',

        ]);

        $trainer = new Home_trainer;
        $trainer->title = $request->title;
        $trainer->description = $request->description;
        $trainer->name_1 = $request->name_1;
        $trainer->fb_1 = $request->fb_1;
        $trainer->name_2 = $request->name_2;
        $trainer->fb_2 = $request->fb_2;
        $trainer->name_3 = $request->name_3;
        $trainer->fb_3 = $request->fb_3;
        $trainer->name_4 = $request->name_4;
        $trainer->fb_4 = $request->fb_4;
        $trainer->name_5 = $request->name_5;
        $trainer->fb_5 = $request->fb_5;
        $trainer->name_6 = $request->name_6;
        $trainer->fb_6 = $request->fb_6;


        if ($request->file('image_1')) {

            $file = $request->file('image_1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_1'] = $filename;
        }

        if ($request->file('image_2')) {

            $file = $request->file('image_2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_2'] = $filename;
        }

        if ($request->file('image_3')) {

            $file = $request->file('image_3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_3'] = $filename;
        }

        if ($request->file('image_4')) {

            $file = $request->file('image_4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_4'] = $filename;
        }

        if ($request->file('image_5')) {

            $file = $request->file('image_5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_5'] = $filename;
        }
        if ($request->file('image_6')) {

            $file = $request->file('image_6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_6'] = $filename;
        }

        $trainer->save();

        if ($request) {
            return back()->with('success', 'Successfully! Offer Content Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function trainer_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'image_1' => 'max:200|mimes:jpg,png,jpeg',
            'name_1' => 'required|max:200',
            'fb_1' => 'required|max:200',
            'image_2' => 'max:200|mimes:jpg,png,jpeg',
            'name_2' => 'required|max:200',
            'fb_2' => 'required|max:200',
            'image_3' => 'max:200|mimes:jpg,png,jpeg',
            'name_3' => 'required|max:200',
            'fb_3' => 'required|max:200',
            'image_4' => 'max:200|mimes:jpg,png,jpeg',
            'name_4' => 'required|max:200',
            'fb_4' => 'required|max:200',
            'image_5' => 'max:200|mimes:jpg,png,jpeg',
            'name_5' => 'required|max:200',
            'fb_5' => 'required|max:200',
            'image_6' => 'max:200|mimes:jpg,png,jpeg',
            'name_6' => 'required|max:200',
            'fb_6' => 'required|max:200',
        ]);

        $trainer = Home_trainer::find($id);
        $trainer->title = $request->title;
        $trainer->description = $request->description;
        $trainer->name_1 = $request->name_1;
        $trainer->fb_1 = $request->fb_1;
        $trainer->name_2 = $request->name_2;
        $trainer->fb_2 = $request->fb_2;
        $trainer->name_3 = $request->name_3;
        $trainer->fb_3 = $request->fb_3;
        $trainer->name_4 = $request->name_4;
        $trainer->fb_4 = $request->fb_4;
        $trainer->name_5 = $request->name_5;
        $trainer->fb_5 = $request->fb_5;
        $trainer->name_6 = $request->name_6;
        $trainer->fb_6 = $request->fb_6;

        if ($request->file('image_1')) {
            if (File::exists('assets/img/uploaded/home/' . $trainer->image_1)) {
                File::delete('assets/img/uploaded/home/' . $trainer->image_1);
            }
            $file = $request->file('image_1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_1'] = $filename;
        }

        if ($request->file('image_2')) {
            if (File::exists('assets/img/uploaded/home/' . $trainer->image_2)) {
                File::delete('assets/img/uploaded/home/' . $trainer->image_2);
            }
            $file = $request->file('image_2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_2'] = $filename;
        }

        if ($request->file('image_3')) {
            if (File::exists('assets/img/uploaded/home/' . $trainer->image_3)) {
                File::delete('assets/img/uploaded/home/' . $trainer->image_3);
            }
            $file = $request->file('image_3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_3'] = $filename;
        }

        if ($request->file('image_4')) {
            if (File::exists('assets/img/uploaded/home/' . $trainer->image_4)) {
                File::delete('assets/img/uploaded/home/' . $trainer->image_4);
            }
            $file = $request->file('image_4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_4'] = $filename;
        }

        if ($request->file('image_5')) {
            if (File::exists('assets/img/uploaded/home/' . $trainer->image_5)) {
                File::delete('assets/img/uploaded/home/' . $trainer->image_5);
            }
            $file = $request->file('image_5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_5'] = $filename;
        }

        if ($request->file('image_6')) {
            if (File::exists('assets/img/uploaded/home/' . $trainer->image_6)) {
                File::delete('assets/img/uploaded/home/' . $trainer->image_6);
            }
            $file = $request->file('image_6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/home/'), $filename);
            $trainer['image_6'] = $filename;
        }

        $trainer->save();

        if ($request) {
            return back()->with('success', 'Successfully! Trainer Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function trainer_delete(Request $request, $id)
    {

        $trainer= Home_trainer::find($id);

        if (File::exists('assets/img/uploaded/home/'.$trainer->image_1 ?? '')) {
            File::delete('assets/img/uploaded/home/'.$trainer->image_1 ?? '');
        }
        if (File::exists('assets/img/uploaded/home/'.$trainer->image_2 ?? '')) {
            File::delete('assets/img/uploaded/home/'.$trainer->image_2 ?? '');
        }
        if (File::exists('assets/img/uploaded/home/'.$trainer->image_3 ?? '')) {
            File::delete('assets/img/uploaded/home/'.$trainer->image_3 ?? '');
        }
        if (File::exists('assets/img/uploaded/home/'.$trainer->image_4 ?? '')) {
            File::delete('assets/img/uploaded/home/'.$trainer->image_4 ?? '');
        }
        if (File::exists('assets/img/uploaded/home/'.$trainer->image_5 ?? '')) {
            File::delete('assets/img/uploaded/home/'.$trainer->image_5 ?? '');
        }
        if (File::exists('assets/img/uploaded/home/'.$trainer->image_6 ?? '')) {
            File::delete('assets/img/uploaded/home/'.$trainer->image_6 ?? '');
        }

        $trainer->delete();

        if ($request) {
            return back()->with('success', 'Successfully! Trainer Delete');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    //----------- Site Setting Section -----------
    public function setting()
    {
        $site = site_setting::orderBy('id', 'DESC')->get();
        return view('Backend.Site.setting', compact('site'));
    }

    // Create
    public function setting_create(Request $request)
    {
        $request->validate([
            'description' => 'required|max:750',
            'copy' => 'required|max:750',
            'social_1' => 'required|max:750',
            'social_2' => 'required|max:250',
            'social_3' => 'required|max:250',
            'logo' => 'mimes:jpg,png,jpeg|max:200',
        ]);

        $setting = new site_setting;
        $setting->description = $request->description;
        $setting->copy = $request->copy;
        $setting->social_1 = $request->social_1;
        $setting->social_2 = $request->social_2;
        $setting->social_3 = $request->social_3;

        if ($request->file('logo')) {

            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/site/'), $filename);
            $setting['logo'] = $filename;
        }

        $setting->save();
        if ($request) {

            return back()->with('success', 'Successfully! Site Setting Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function setting_update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|max:750',
            'copy' => 'required|max:750',
            'social_1' => 'required|max:750',
            'social_2' => 'required|max:250',
            'social_3' => 'required|max:250',
            'logo' => 'mimes:jpg,png,jpeg|max:200',
        ]);

        $setting = site_setting::find($id);
        $setting->description = $request->description;
        $setting->copy = $request->copy;
        $setting->social_1 = $request->social_1;
        $setting->social_2 = $request->social_2;
        $setting->social_3 = $request->social_3;

        if ($request->file('logo')) {
            if (File::exists('assets/img/uploaded/site/' . $setting->logo)) {
                File::delete('assets/img/uploaded/site/' . $setting->logo);
            }
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/site/'), $filename);
            $setting['logo'] = $filename;
        }

        $setting->save();

        if ($request) {

            return back()->with('success', 'Successfully! Header Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function setting_delete($id)
    {
        $setting= site_setting::find($id);

        if (File::exists('assets/img/uploaded/site/'.$setting->logo)) {
            File::delete('assets/img/uploaded/site/'.$setting->logo);

            $setting->delete();
            return back()->with('success', 'Successfully! Setting Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }


    // Auth Section
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team_header;
use App\Models\Team_member;
use File;
class TeamController extends Controller
{
    //----------- Header Section -----------
    public function header()
    {
        $header = Team_header::orderBy('id', 'DESC')->get();
        return view('Backend.Team.header', compact('header'));
    }

    // Create
    public function header_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $header = new Team_header;
        $header->title = $request->title;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/team/'), $filename);
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
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $header_update = Team_header::find($id);
        $header_update->title = $request->title;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/team/' . $header_update->image)) {
                File::delete('assets/img/uploaded/team/' . $header_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/team/'), $filename);
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
        $header_delete= Team_header::find($id);

        if (File::exists('assets/img/uploaded/team/'.$header_delete->image)) {
            File::delete('assets/img/uploaded/team/'.$header_delete->image);

            $header_delete->delete();
            return back()->with('success', 'Successfully! Header Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    //----------- Team Member Section -----------
    public function team()
    {

        $team = Team_member::orderBy('id', 'DESC')->get();
        return view('Backend.Team.team_member', compact('team'));
    }

    // Create
    public function team_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'position' => 'required|max:250',
            'description' => 'required|max:750',
            'social_1' => 'nullable',
            'social_2' => 'nullable',
            'social_3' => 'nullable',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $team = new Team_member;
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->social_1 = $request->social_1;
        $team->social_2 = $request->social_2;
        $team->social_3 = $request->social_3;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/team/'), $filename);
            $team['image'] = $filename;
        }

        $team->save();
        if ($request) {

            return back()->with('success', 'Successfully! Team Member Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function team_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:200',
            'position' => 'required|max:250',
            'description' => 'required|max:750',
            'social_1' => 'nullable',
            'social_2' => 'nullable',
            'social_3' => 'nullable',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $team_update = Team_member::find($id);
        $team_update->name = $request->name;
        $team_update->position = $request->position;
        $team_update->description = $request->description;
        $team_update->social_1 = $request->social_1;
        $team_update->social_2 = $request->social_2;
        $team_update->social_3 = $request->social_3;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/team/' . $team_update->image)) {
                File::delete('assets/img/uploaded/team/' . $team_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/team/'), $filename);
            $team_update['image'] = $filename;
        }

        $team_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! Team Member Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function team_delete($id)
    {
        $team_delete= Team_member::find($id);

        if (File::exists('assets/img/uploaded/team/'.$team_delete->image)) {
            File::delete('assets/img/uploaded/team/'.$team_delete->image);

            $team_delete->delete();
            return back()->with('success', 'Successfully! Team Member Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }
}

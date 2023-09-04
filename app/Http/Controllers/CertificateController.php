<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate_title;
use App\Models\Certificate;
Use File;

class CertificateController extends Controller
{
    //----------- Certificate_title Section -----------
    public function Certificate_title()
    {

        $Certificate_title = Certificate_title::orderBy('id', 'DESC')->get();
        return view('Backend.Certificate.certificate_header', compact('Certificate_title'));
    }

    // Create
    public function Certificate_title_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Certificate_title = new Certificate_title;
        $Certificate_title->title = $request->title;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/certificate/'), $filename);
            $Certificate_title['image'] = $filename;
        }

        $Certificate_title->save();
        if ($request) {

            return back()->with('success', 'Successfully! Certificate Title Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Certificate_title_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Certificate_title_update = Certificate_title::find($id);
        $Certificate_title_update->title = $request->title;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/certificate/' . $Certificate_title_update->image)) {
                File::delete('assets/img/uploaded/certificate/' . $Certificate_title_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/certificate/'), $filename);
            $Certificate_title_update['image'] = $filename;
        }

        $Certificate_title_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! Certificate_title Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Certificate_title_delete($id)
    {
        $Certificate_title_delete= Certificate_title::find($id);

        if (File::exists('assets/img/uploaded/certificate/'.$Certificate_title_delete->image)) {
            File::delete('assets/img/uploaded/certificate/'.$Certificate_title_delete->image);

            $Certificate_title_delete->delete();
            return back()->with('success', 'Successfully! Certificate_title Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    // Main Certificate
    public function Certificate()
    {
        $Certificate = Certificate::orderBy('id', 'DESC')->get();
        return view('Backend.Certificate.certificate', compact('Certificate'));
    }

    // Create
    public function Certificate_create(Request $request)
    {
        $request->validate([
            'sn' => 'required|max:200',
            's_id' => 'required|max:200',
            'issue_date' => 'required|max:750',
            'name' => 'required|max:200',
            'course' => 'required|max:200',
            'result' => 'required|max:200',
            'course_start_date' => 'required|max:200',
            'course_end_date' => 'required|max:200',
        ]);

        $Certificate = new Certificate;
        $Certificate->sn = $request->sn;
        $Certificate->s_id = $request->s_id;
        $Certificate->issue_date = $request->issue_date;
        $Certificate->name = $request->name;
        $Certificate->course = $request->course;
        $Certificate->result = $request->result;
        $Certificate->course_start_date = $request->course_start_date;
        $Certificate->course_end_date = $request->course_end_date;
     
        $Certificate->save();
        if ($request) {

            return back()->with('success', 'Successfully! Certificate Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Certificate_update(Request $request, $id)
    {
        $request->validate([
            'sn' => 'nullable|max:200',
            's_id' => 'nullable|max:200',
            'issue_date' => 'nullable|max:200',
            'name' => 'nullable|max:200',
            'course' => 'nullable|max:200',
            'result' => 'nullable|max:200',
            'course_start_date' => 'nullable|max:200',
            'course_end_date' => 'nullable|max:200',
        ]);

        $Certificate = Certificate::find($id);
        $Certificate->sn = $request->sn;
        $Certificate->s_id = $request->s_id;
        $Certificate->issue_date = $request->issue_date;
        $Certificate->name = $request->name;
        $Certificate->course = $request->course;
        $Certificate->result = $request->result;
        $Certificate->course_start_date = $request->course_start_date;
        $Certificate->course_end_date = $request->course_end_date;
        $Certificate->save();

        if ($request) {

            return back()->with('success', 'Successfully! Certificate Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Certificate_delete(Request $request,$id)
    {
        $Certificate_delete= Certificate::find($id);

        $Certificate_delete->delete();

        if ($request) {
            return back()->with('success', 'Successfully! Certificate Delete');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

}

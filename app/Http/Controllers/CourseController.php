<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course_header;
use App\Models\Course_category;
use App\Models\Course;
use App\Models\Best_student;
use File;
class CourseController extends Controller
{
    //----------- Header Section -----------
    public function header()
    {
        $header = Course_header::orderBy('id', 'DESC')->get();
        return view('Backend.Course.header', compact('header'));
    }

    // Create
    public function header_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'sub_title' => 'required|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $header = new Course_header;
        $header->title = $request->title;
        $header->sub_title = $request->sub_title;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/course/'), $filename);
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

        $header_update = Course_header::find($id);
        $header_update->title = $request->title;
        $header_update->sub_title = $request->sub_title;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/course/' . $header_update->image)) {
                File::delete('assets/img/uploaded/course/' . $header_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/course/'), $filename);
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
        $header_delete= Course_header::find($id);

        if (File::exists('assets/img/uploaded/course/'.$header_delete->image)) {
            File::delete('assets/img/uploaded/course/'.$header_delete->image);

            $header_delete->delete();
            return back()->with('success', 'Successfully! Header Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    //----------- Course Section -----------
    // Cat
    public function cat()
    {
        $cat = Course_category::orderBy('id', 'DESC')->get();
        return view('Backend.Course.cat_course', compact('cat'));
    }

    // Create
    public function cat_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'status' => 'required|max:250',
        ]);

        $cat = new Course_category;
        $cat->name = $request->name;
        $cat->status = $request->name;

        $cat->save();

        if ($request) {

            return back()->with('success', 'Successfully! Course Category Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function cat_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:200',
            'status' => 'required|max:250',
        ]);

        $cat_update = Course_category::find($id);
        $cat_update->name = $request->name;
        $cat_update->status = $request->name;

        $cat_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! Course Category Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function cat_delete($id)
    {
        $cat= Course_category::find($id);

        if(!is_null($cat)) {

            $course = Course::where('cat_id', $cat->id )->get();

            foreach($course as $img)
            {
                 $course =Course::where('id',$img->id)->first();

                 if (File::exists('assets/img/uploaded/course/'.$course->image)) {
                   File::delete('assets/img/uploaded/course/'.$course->image);
               }
                  $course->delete();

            }
            $cat->delete();
            return back()->with('success', 'Course Name Deleted Successfully');
        }

        else
        {
            return back()->with('success', ' Area Data Not Deleted Successfully');
        }

    }

    // Main Course
    public function course()
    {
        $cat = Course_category::orderBy('id', 'DESC')->get();
        $course = Course::orderBy('id', 'DESC')->get();
        return view('Backend.Course.course', compact('course','cat'));
    }

    // Create
    public function course_create(Request $request)
    {
        $request->validate([
            'cat_id' => 'required|max:200',
            'title' => 'required|max:200',
            'description' => 'required|max:750',
            'time' => 'required|max:200',
            'fee' => 'required|max:200',
            'instructor_name' => 'required|max:200',
            'icon' => 'mimes:jpg,png,jpeg|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $course = new Course;
        $course->cat_id = $request->cat_id;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->time = $request->time;
        $course->fee = $request->fee;
        $course->instructor_name = $request->instructor_name;

        if ($request->file('icon')) {

            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/course/'), $filename);
            $course['icon'] = $filename;
        }
        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/course/'), $filename);
            $course['image'] = $filename;
        }

        $course->save();
        if ($request) {

            return back()->with('success', 'Successfully! course Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function course_update(Request $request, $id)
    {
        $request->validate([
            'cat_id' => 'nullable|max:200',
            'title' => 'nullable|max:200',
            'description' => 'nullable|max:750',
            'time' => 'nullable|max:200',
            'fee' => 'nullable|max:200',
            'instructor_name' => 'nullable|max:200',
            'icon' => 'mimes:jpg,png,jpeg|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $course_update = Course::find($id);
        $course_update->cat_id = $request->cat_id;
        $course_update->title = $request->title;
        $course_update->description = $request->description;
        $course_update->time = $request->time;
        $course_update->fee = $request->fee;
        $course_update->instructor_name = $request->finstructor_nameee;

        if ($request->file('icon')) {
            if (File::exists('assets/img/uploaded/course/' . $course_update->icon)) {
                File::delete('assets/img/uploaded/course/' . $course_update->icon);
            }
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/course/'), $filename);
            $course_update['icon'] = $filename;
        }

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/course/' . $course_update->image)) {
                File::delete('assets/img/uploaded/course/' . $course_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/course/'), $filename);
            $course_update['image'] = $filename;
        }

        $course_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! course Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function course_delete(Request $request,$id)
    {
        $course_delete= Course::find($id);

        if (File::exists('assets/img/uploaded/course/'.$course_delete->icon ?? '')) {
            File::delete('assets/img/uploaded/course/'.$course_delete->icon ?? '');
        }
        if (File::exists('assets/img/uploaded/course/'.$course_delete->image ?? '')) {
            File::delete('assets/img/uploaded/course/'.$course_delete->image ?? '');
        }
        $course_delete->delete();

        if ($request) {
            return back()->with('success', 'Successfully! Course Delete');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }




     // Best Student

    public function Best_student()
    {
        $Best_student = Best_student::orderBy('id', 'DESC')->get();
        return view('Backend.Course.best_student.best_student', compact('Best_student'));
    }

    // Create
    public function best_student_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'point' => 'required|max:20',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Best_student = new Best_student;
        $Best_student->name = $request->name;
        $Best_student->point = $request->point;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/student/'), $filename);
            $Best_student['image'] = $filename;
        }

        $Best_student->save();
        if ($request) {

            return back()->with('success', 'Successfully! Best Student Create');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Best_student_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|max:200',
            'point' => 'nullable|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Best_student = Best_student::find($id);
        $Best_student->name = $request->name;
        $Best_student->point = $request->point;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/student/' . $Best_student->image)) {
                File::delete('assets/img/uploaded/student/' . $Best_student->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/student/'), $filename);
            $Best_student['image'] = $filename;
        }

        $Best_student->save();

        if ($request) {

            return back()->with('success', 'Successfully! Best Student Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Best_student_delete($id)
    {
        $Best_student= Best_student::find($id);

        if (File::exists('assets/img/uploaded/student/'.$Best_student->image)) {
            File::delete('assets/img/uploaded/student/'.$Best_student->image);

            $Best_student->delete();
            return back()->with('success', 'Successfully! Best Student Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }


}

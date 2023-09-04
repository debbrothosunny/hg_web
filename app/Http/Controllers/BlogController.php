<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog_header,Blog_category,Blog_post};
use File;

class BlogController extends Controller
{
    //----------- Blog_header Section -----------
    public function Blog_header()
    {

        $Blog_header = Blog_header::orderBy('id', 'DESC')->get();
        return view('Backend.Blog.blog_header', compact('Blog_header'));
    }

    // Create
    public function Blog_header_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Blog_header = new Blog_header;
        $Blog_header->title = $request->title;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/blog/'), $filename);
            $Blog_header['image'] = $filename;
        }

        $Blog_header->save();
        if ($request) {

            return back()->with('success', 'Successfully! Blog Title Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Blog_header_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Blog_header_update = Blog_header::find($id);
        $Blog_header_update->title = $request->title;

        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/blog/' . $Blog_header_update->image)) {
                File::delete('assets/img/uploaded/blog/' . $Blog_header_update->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/blog/'), $filename);
            $Blog_header_update['image'] = $filename;
        }

        $Blog_header_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! Blog_header Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Blog_header_delete($id)
    {
        $Blog_header_delete= Blog_header::find($id);

        if (File::exists('assets/img/uploaded/blog/'.$Blog_header_delete->image)) {
            File::delete('assets/img/uploaded/blog/'.$Blog_header_delete->image);

            $Blog_header_delete->delete();
            return back()->with('success', 'Successfully! Blog_header Deleted');
        }else
        {
            return back()->with('failed', 'Data Deleted Unsuccessfully');
        }
    }

    // Blog Section

    //----------- Course Section -----------
    // Blog_category
    public function Blog_category()
    {
        $Blog_category = Blog_category::orderBy('id', 'DESC')->get();
        return view('Backend.Blog.blog_category', compact('Blog_category'));
    }

    // Create
    public function Blog_category_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'status' => 'required|max:250',
        ]);

        $Blog_category = new Blog_category;
        $Blog_category->name = $request->name;
        $Blog_category->status = $request->name;

        $Blog_category->save();

        if ($request) {

            return back()->with('success', 'Successfully! Blog_category Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Blog_category_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:200',
            'status' => 'required|max:250',
        ]);

        $Blog_category_update = Blog_category::find($id);
        $Blog_category_update->name = $request->name;
        $Blog_category_update->status = $request->name;

        $Blog_category_update->save();

        if ($request) {

            return back()->with('success', 'Successfully! Blog_category Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Blog_category_delete($id)
    {
        $Blog_category= Blog_category::find($id);

        if(!is_null($Blog_category)) {

            $Blog_post = Blog_post::where('category_id', $Blog_category->id )->get();

            foreach($Blog_post as $img)
            {
                 $Blog_post =Blog_post::where('id',$img->id)->first();

                 if (File::exists('assets/img/uploaded/blog/'.$Blog_post->image)) {
                   File::delete('assets/img/uploaded/blog/'.$Blog_post->image);
               }
                  $Blog_post->delete();

            }
            $Blog_category->delete();
            return back()->with('success', 'Blog Category Deleted Successfully');
        }

        else
        {
            return back()->with('success', ' Area Data Not Deleted Successfully');
        }

    }

    // Main Course
    public function Blog_post()
    {
        $Blog_category = Blog_category::orderBy('id', 'DESC')->get();
        $Blog_post = Blog_post::orderBy('id', 'DESC')->get();
        return view('Backend.blog.blog', compact('Blog_post','Blog_category'));
    }

    // Create
    public function Blog_post_create(Request $request)
    {
        $request->validate([
            'category_id' => 'required|max:200',
            'title' => 'required|max:200',
            'description_1' => 'required|max:750',
            'description_2' => 'required|max:250',
            'description_3' => 'required|max:250',
            'image' => 'mimes:jpg,png,jpeg|max:500',
        ]);

        $Blog_post = new Blog_post;
        $Blog_post->category_id = $request->category_id;
        $Blog_post->title = $request->title;
        $Blog_post->description_1 = $request->description_1;
        $Blog_post->description_2 = $request->description_2;
        $Blog_post->description_3 = $request->description_3;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/blog/'), $filename);
            $Blog_post['image'] = $filename;
        }

        $Blog_post->save();
        if ($request) {

            return back()->with('success', 'Successfully! Blog Post Insert');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    // Update
    public function Blog_post_update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'nullable|max:200',
            'title' => 'nullable|max:200',
            'description_1' => 'nullable|max:750',
            'description_2' => 'nullable|max:250',
            'description_3' => 'nullable|max:250',
            'image' => 'nullable|max:500',
        ]);

        $Blog_post = Blog_post::find($id);
        $Blog_post->category_id = $request->category_id;
        $Blog_post->title = $request->title;
        $Blog_post->description_1 = $request->description_1;
        $Blog_post->description_2 = $request->description_2;
        $Blog_post->description_3 = $request->description_3;


        if ($request->file('image')) {
            if (File::exists('assets/img/uploaded/blog/' . $Blog_post->image)) {
                File::delete('assets/img/uploaded/blog/' . $Blog_post->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('assets/img/uploaded/blog/'), $filename);
            $Blog_post['image'] = $filename;
        }

        $Blog_post->save();

        if ($request) {

            return back()->with('success', 'Successfully! Blog Update');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

    // Delete
    public function Blog_post_delete(Request $request,$id)
    {
        $Blog_post= Blog_post::find($id);

        if (File::exists('assets/img/uploaded/course/'.$Blog_post->image ?? '')) {
            File::delete('assets/img/uploaded/course/'.$Blog_post->image ?? '');
        }
        $Blog_post->delete();

        if ($request) {
            return back()->with('success', 'Successfully! Blog Post Delete');
        } else {
            return back()->with('failed', 'Something Wrong');
        }
    }

}

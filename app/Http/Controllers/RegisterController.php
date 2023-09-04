<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $user= User::orderBy('id', 'DESC')->paginate(10);
        return view('Backend.register.register' , compact('user'));
    }

    public function create()
    {
        return view('Backend.register.register_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:12'
        ]);

        $user= new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->status=$request->status;
        $user->password = hash::make($request->password);
        $user->save();
        if($request){
            return back()->with('success', 'You have Added User Successfully');
           }else{
            return back()->with('fail', 'Something  Wrong');
        }
    }

    public function edit($id)
    {
        $data= User::find($id);
        return view('Backend.register.register_edit', compact('data'));
    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',

        ]);

        $user= User::find($id);
        $user->name=$request->name;
        $user->status=$request->status;
        $user->email=$request->email;
        $user->password = hash::make($request->password);
        $user->save();
        if($request){
            return back()->with('success', 'You have Updated User Successfully');
           }else{
            return back()->with('fail', 'Something  Wrong');
        }
    }

    // public function changeStatus( $id)
    // {

    //     $getstatus  = User::select('status')->where('id',$id)->first();

    //     if($getstatus->status==1){
    //         $status = 0;
    //     }else{
    //         $status = 1;
    //     }
    //     User::where('id',$id)->update(['status'=>$status]);

    //     return redirect()->back();
    // }


    public function destroy($id)
    {
        $user= User::find($id);

        $user->delete();
        return back()->with('success', 'User Delete Successfully');
    }
}

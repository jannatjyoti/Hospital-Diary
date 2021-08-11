<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Doctor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    
    public function uploadImage($image,$path)
    {
        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'Image/'.$path.'/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move(public_path($upload_path), $image_full_name);
        if ($success) {
            return $image_url;
        }
        else{
            return '500';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors =Doctor::where('admin_id',session('LoggedUser'))->get();
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('doctor.list', $data)->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view ('doctor.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'doctor_Name'=>'required',
            'designation'=>'required',
             'email'=>'required|email|unique:doctors,email',
             'degree'=>'required',
             'specialized'=>'required',
             'number'=> 'required',
             'chamber_time'=>'required',
             'room_no'=>'required',
             'image'=>'required'
        ]);
        
        $doctor = new Doctor();
        $doctor->doctor_Name = $request->doctor_Name;
        $doctor->designation = $request->designation;
        $doctor->email = $request->email;
        $doctor->degree = $request->degree;
        $doctor->specialized = $request->specialized;
        $doctor->number = $request->number;
        $doctor->chamber_time = $request->chamber_time;
        $doctor->room_no = $request->room_no;
        $doctor->admin_id = session('LoggedUser');

        $image_url = $this->uploadImage($request->image,'doctor');
        $doctor->image_url = $image_url;
        $result = $doctor->save();
        return ($result) ? redirect('admin/doctor')->with('success','Doctor added') : redirect('admin/doctor')->with('error','Failed');

        return redirect('admin/doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor =Doctor::where('admin_id',session('LoggedUser'))->find($id);
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view ('doctor.detail', $data)->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor =Doctor::where('admin_id',session('LoggedUser'))->find($id);
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view ('doctor.edit', $data)->with('doctor', $doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        $this->validate($request,[
            'doctor_Name'=>'required',
            'designation'=>'required',
            'email'=>'required|email|unique:doctors,email,'.$id,
             'degree'=>'required',
             'specialized'=>'required',
             'number'=> 'required',
             'chamber_time'=>'required',
             'room_no'=>'required',
             'image'=>'required'
        ]);
        //return $request;
        
        $doctor = Doctor::find($id);
        $doctor->doctor_Name = $request-> doctor_Name;
        $doctor->designation = $request->designation;
        $doctor->email = $request->email;
        $doctor->degree = $request->degree;
        $doctor->specialized = $request->specialized;
        $doctor->number = $request->number;
        $doctor->chamber_time = $request->chamber_time;
        $doctor->room_no = $request->room_no;

        $old_img_path = $doctor->image_url;
        if(File::exists($old_img_path)){
            unlink($old_img_path);
        }
        $image_url = $this->uploadImage($request->image,'doctor');
        $doctor->image_url = $image_url;

        $doctor->save();

        return redirect('admin/doctor')->with('success','Doctor info updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // return $id;
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect ('admin/doctor');
    }
}

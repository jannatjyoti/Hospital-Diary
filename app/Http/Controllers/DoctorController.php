<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Doctor;

class DoctorController extends Controller
{
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
    public function store(Request $request,)
    {

        $this->validate($request,[
            'doctor_Name'=>'required',
            'designation'=>'required',
             'email'=>'required|email|unique:doctors,email',
             'degree'=>'required',
             'specialized'=>'required',
             'number'=> 'required',
             'chamber_time'=>'required',
             'room_no'=>'required'
        ]);
        
        // return session('LoggedUser');
        $request->request->add(['admin_id' => session('LoggedUser')]);
        $data= $request->all();

        Doctor::create($data);
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
             'room_no'=>'required'
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
        $doctor-> save();

        return redirect('admin/doctor');

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

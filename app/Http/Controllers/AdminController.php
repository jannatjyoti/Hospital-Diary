<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\ServiceDetail;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\facades\Hash;

class AdminController extends Controller
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
    public function admin_login()
    {
        return view('auth.admin_login');
    }

    public function admin_logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/admin_login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_register()
    {
        return view('auth.admin_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function admin_save(Request $request)
    {
        $request->validate([
            'hospital_name'=>'required',
            'admin_name'=>'required',
            'hospital_code'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12',
            'address'=>'required',
            'contact_no'=>'required',
            'image'=>'required',
        ]);
        
        // insert data into database
        $admin = new Admin();
        $admin->admin_name = $request->admin_name;
        $admin->hospital_name = $request->hospital_name;
        $admin->hospital_code = $request->hospital_code;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->address = $request->address;
        $admin->contact_no = $request->contact_no;
        
        $image_url = $this->uploadImage($request->image,'hospital');
        $admin->image_url = $image_url;

        $save = $admin->save();
        if($save){
            return back()->with('success', 'New client successfully added to database.');
        }else{
            return back()->with('fail', 'Somthing went wrong, please check and try again.');
        }
    }

    // Check if the client exist in the system before login
    public function admin_check(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
       ]);

        //match client to the database
        $adminInfo = Admin::where('email','=', $request->email)->first();

        if(!$adminInfo){
            return back()->with('fail','We do not recognize your email address.');
        }else{
            //check password
            if(Hash::check($request->password, $adminInfo->password)){
                //Auth::user = $adminInfo;
                //$request->session()->put('LoggedUser', $adminInfo->id);
                session(['LoggedUser' => $adminInfo->id]);
                session(['role' => $adminInfo->role]);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail', "Incorrect password.");
            }
        }
    }

    public function admin_dashboard()
    {
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        $doctors= Doctor::where('admin_id', session('LoggedUser'))->get();
        //$serviceXray= ServiceDetail::where('admin_id', session('LoggedUser'))->where('service_id', '1')->first();
        
        $serviceDetails = ServiceDetail::where('admin_id', session('LoggedUser'))->get();
        return view('dashboards.admins.index', $data, compact('doctors','serviceDetails'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];

        $hospital= Admin::find(session('LoggedUser'));
        return view('hospital.edit',$data, compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'hospital_name'=>'required',
            //'password'=>'required|min:5|max:12',
            //'old_password' => 'password',
            'address'=>'required',
            'contact_no'=>'required|max:15',
        ]);
        $hospital = Admin::find($id);
        $hospital->hospital_name = $request->hospital_name;
        $hospital->address = $request->address;
        $hospital->contact_no = $request->contact_no;
        if ($request->image) {
            $old_img_path = $hospital->image_url;
            if(File::exists($old_img_path)){
                unlink($old_img_path);
            }
            $image_url = $this->uploadImage($request->image,'hospital');
            $hospital->image_url = $image_url;
        }
        
        $hospital->save();
        return back()->with('success','Hospital info updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changepw($id)
    {
        
    }
}

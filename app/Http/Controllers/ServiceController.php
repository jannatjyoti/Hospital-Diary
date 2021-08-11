<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Imports\ServicesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('SuperAdmin')->except(['store','create','index','import']);
        //$this->middleware('AuthCheck')->except(['index','create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $services= Service::get();
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];

        return view('service.list', $data)->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view ('service.add', $data);
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
            'service_name'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $service = new Service();
        $service->service_name = $request->service_name;
        $service->admin_id = session('LoggedUser');

        //$request->request->add(['admin_id' => session('LoggedUser')]);

        if (session('role')=='1') {
            $service->is_active = '1';
        }

        $image_url = $this->uploadImage($request->image,'service');

        $service->image_url = $image_url;
        $result = $service->save();
        return ($result) ? redirect('admin/service')->with('success','Service added') : redirect('admin/service')->with('error','Failed');
        
        //return redirect('admin/service');
    }

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('service.edit', $data)->with('service', $service);
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
        $this->validate($request,[
            'service_name'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $service = Service::find($id);
        $old_img_path = $service->image_url;
        if(File::exists($old_img_path)){
            unlink($old_img_path);
        }
        
        $image_url = $this->uploadImage($request->image,'service');
        $service->image_url = $image_url;

        $service->service_name = $request->service_name;
        $service->is_active = $request->is_active;
        $service->save();

        return redirect('admin/service')->with('success','Service updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $service= Service::find($id);
        $service->delete();
        // return redirect('admin/service');
        return response()->json(['massage'=>'Service deleted successfully']);
    }

    // public function import(Request $request)
    // {
    //     $this->validate($request, ['select_file' => 'required|mimes:xls,xlsx']);

    //     //$logged_user_id = Auth::user()->id;

    //     $path = $request->file('select_file')->getRealPath();
    //     $data = Excel::load($path)->get();

    //     if($data->count() > 0)
    //     {
    //         foreach($data->toArray() as $key => $value)
    //         {
    //             foreach($value as $row)
    //             {
    //                 $insert_data[] = array(
    //                 'service_name' => $row['service_name'],
    //                 'admin_id' => $row['admin_id'],
    //                 );
    //             }
    //         }

    //         if(!empty($insert_data))
    //         {
    //             DB::table('services')->insert($insert_data);
    //         }
    //     }
    //     return back()->with('success', 'Excel Data Imported successfully.');
    //     return redirect('admin/service.list');
    // }

    public function import() 
    {
        Excel::import(new ServicesImport,request()->file('select_file'));
             
        // return back()->with('success', 'Excel Data Imported successfully.');
        return redirect('admin/service');
    }
}

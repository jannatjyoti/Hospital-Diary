<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Imports\ServicesImport;
use Maatwebsite\Excel\Facades\Excel;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::where('admin_id',session('LoggedUser'))->get();
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
            'service_name'=> 'required'
        ]);
        $request->request->add(['admin_id' => session('LoggedUser')]);
        $data= $request->all();
        Service::create($data);
        return redirect('admin/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $service = Service::where('admin_id', session('LoggedUser'))->find($id);
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
            'service_name'=> 'required'
        ]);

        $service = Service::find($id);
        $service->service_name = $request-> service_name;
        $service->save();

        return redirect('admin/service');
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
        return redirect('admin/service');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Service;
use App\Models\ServiceDetail;


class ServiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $service = array();
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        $serviceDetails = ServiceDetail::where('admin_id', session('LoggedUser'))->get();
        
        return view('service-detail.list', $data)->with('serviceDetails', $serviceDetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        $services = Service::where('admin_id', session('LoggedUser'))->get();
        return view('service-detail.add', $data)->with('services', $services);
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
            'total'=> 'required',
            'running'=> 'required' 
        ]);
        
        $request->request->add(['admin_id' => session('LoggedUser')]);
        $data= $request->all();
        ServiceDetail::create($data);
        return redirect('');
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
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        $serviceDetails= ServiceDetail::where('admin_id', session('LoggedUser'))->find($id);
        return view('service-detail.edit', $data)->with('serviceDetails', $serviceDetails);
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
            'total'=> 'required',
            'running'=> 'required' 
        ]);

        $serviceDetail = ServiceDetail::find($id);
        $serviceDetail->total = $request->total;
        $serviceDetail->running = $request->running;
        $serviceDetail->save();

        return redirect('admin/serviceDetail');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $serviceDetail= ServiceDetail::find($id);
        $serviceDetail->delete();
        return redirect('admin/serviceDetail');
    }
}
